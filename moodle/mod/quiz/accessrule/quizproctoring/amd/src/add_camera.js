/**
 * JavaScript class for Camera
 *
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['jquery', 'core/str', 'core/modal_factory'],
function($, str, ModalFactory) {
    var Camera = function(cmid, mainimage = false, attemptid = null) {
        var docElement = $(document);
        this.video = document.getElementById(this.videoid);
        this.canvas = document.getElementById(this.canvasid);
        this.cmid = cmid;
        this.mainimage = mainimage;
        this.attemptid = attemptid;
        docElement.on('popup', this.showpopup.bind(this));
        setTimeout(navigator.mediaDevices.getUserMedia({video: true, audio: false})
            .then(function(stream) {
                if (this.video) {
                  this.video.srcObject = stream;
                  this.video.play();
                }
            })
        .catch(function() {
            // Console.log(err);
        }), 10000);
    };
    /** @type Tag element contain video. */
    Camera.prototype.video = false;
    /** @type String video elemend id. */
    Camera.prototype.videoid = 'video';
    /** @type Tag element contain canvas. */
    Camera.prototype.canvas = false;
    /** @type String video elemend id. */
    Camera.prototype.canvasid = 'canvas';
    /** @type int width of canvas object. */
    Camera.prototype.width = 320;
    /** @type int width of canvas object. */
    Camera.prototype.height = 240;
    /** @type String element contain takepicture button. */
    Camera.prototype.takepictureid = 'takepicture';
    /** @type String element contain retake button. */
    Camera.prototype.retakeid = 'retake';
    /** @type int course module id. */
    Camera.prototype.cmid = false;
    /** @type bool whether a main image or compare against an image. */
    Camera.prototype.mainimage = false;
     /** @type int attempt id. */
    Camera.prototype.attemptid = false;

    Camera.prototype.takepicture = function() {
        // Console.log('takepicture function');
        var context = this.canvas.getContext('2d');
        context.drawImage(this.video, 0, 0, this.width, this.height);
        var data = this.canvas.toDataURL('image/png');
        $('#' + this.videoid).hide();
        $('#' + this.takepictureid).hide();
        $('#' + this.canvasid).show();
        $('#' + this.retakeid).show();
        $("input[name='userimg']").val(data);
        $("#id_submitbutton").prop("disabled", true);
        $.ajax({
            url: M.cfg.wwwroot + '/mod/quiz/accessrule/quizproctoring/ajax.php',
            method: 'POST',
            data: {imgBase64: data, cmid: this.cmid,attemptid: this.attemptid, mainimage: this.mainimage},
            success: function(response) {
                if (response && response.errorcode) {
                    // Console.log(response.errorcode);
                    $("input[name='userimg']").val('');
                    $(document).trigger('popup', response.error);
                } else {
                    $("#id_submitbutton").prop("disabled", false);
                }
            }
        });
    };
    Camera.prototype.proctoringimage = function() {
        // Console.log(this.cmid);
        var context = this.canvas.getContext('2d');
        context.drawImage(this.video, 0, 0, this.width, this.height);
        var data = this.canvas.toDataURL('image/png');
        $.ajax({
            url: M.cfg.wwwroot + '/mod/quiz/accessrule/quizproctoring/ajax.php',
            method: 'POST',
            data: {imgBase64: data, cmid: this.cmid, attemptid: this.attemptid, mainimage: this.mainimage},
            success: function(response) {
                if (response && response.errorcode) {
                   // Console.log(response.errorcode);
                    $(document).trigger('popup', response.error);
                } else {
                    if (response.redirect && response.url) {
                        window.onbeforeunload = null;
                        window.location.href = encodeURI(response.url);
                    }
                }
            }
        });
    };

    Camera.prototype.retake = function() {
        $("input[name='userimg']").val('');
        $('#' + this.videoid).show(this.cmid);
        $('#' + this.takepictureid).show();
        $('#' + this.canvasid).hide();
        $('#' + this.retakeid).hide();
    };
    Camera.prototype.showpopup = function(event, message) {
        ModalFactory.create({
            body: message,
        }).then(function(modal) {
            modal.show();
        });
    };
    var init = function(cmid, mainimage, verifyduringattempt = false, attemptid = null, setinterval = 300) {
        if (verifyduringattempt) {
            $('<canvas>').attr({id: 'canvas', width: '280', height: '240', 'style': 'display: none;'}).appendTo('body');
            $('<video>').attr({
                id:'video',
                class:'quizaccess_quizproctoring-video',
                width:'280',
                height:'240',
                autoplay:'autoplay'}).appendTo('body');
            var camera = new Camera(cmid, mainimage, attemptid);
            setInterval(camera.proctoringimage.bind(camera), setinterval * 1000);
        } else {
            var camera = new Camera(cmid, mainimage, attemptid);
            // Take picture on button click
            $('#' + camera.takepictureid).on('click', function(e) {
                e.preventDefault();
                camera.takepicture();
            });
            // Show video again when retake
            $('#' + camera.retakeid).on('click', function(e) {
                e.preventDefault();
                camera.retake();
            });
            $("#id_submitbutton").on('click', function(e) {
                if ($("input[name='userimg']").val() == "") {
                    e.preventDefault();
                    ModalFactory.create({
                        body: str.get_string('clickpicture', 'quizaccess_quizproctoring'),
                    }).then(function(modal) {
                        modal.show();
                    });
                }
            });
        }
    };
    return {
        init: init
    };
});
