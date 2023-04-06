/**
 * JavaScript class for quiz protection
 *
 * @subpackage quizproctoring
 * @copyright  2020 Mahendra Soni <ms@taketwotechnologies.com> {@link https://taketwotechnologies.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['jquery', 'core/str', 'core/modal_factory'],
function($, str, ModalFactory) {
    var init = function() {
        var formid = "#responseform";
        var isvalid = false;
        var hasinput = false;
        $(formid).submit( function(e) {
            $("#responseform .answer input").each(function (){
                hasinput = true;
                if ($(this).is(':checked')) {
                    isvalid = true;
                    return;
                }
            });

            if (hasinput && !isvalid) {
                e.preventDefault();
                ModalFactory.create({
                    body: str.get_string('selectanswer', 'quizaccess_quizproctoring'),
                }).then(function(modal) {
                    modal.show();
                    $('#responseform input[type="submit"]').prop('disabled', false);
                    M.core_question_engine.questionformalreadysubmitted = false;
                });
            }
        });
    };
    return {
        init: init
    };
});
