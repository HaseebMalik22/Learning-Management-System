function NewHttpReq(){var httpReq=!1;if(typeof XMLHttpRequest!='undefined'){httpReq=new XMLHttpRequest()}else{try{httpReq=new ActiveXObject("Msxml2.XMLHTTP.4.0")}catch(e){try{httpReq=new ActiveXObject("Msxml2.XMLHTTP")}catch(ee){try{httpReq=new ActiveXObject("Microsoft.XMLHTTP")}catch(eee){httpReq=!1}}}}
return httpReq}
function DoRequest(httpReq,url,param,allowBeaconAPI){if(typeof allowBeaconAPI==='undefined'){allowBeaconAPI=!0}
var canUseBeaconAPI=function(){return(allowBeaconAPI&&navigator&&navigator.sendBeacon&&FormData)};var useBeaconAPI=function(){if(typeof window.mod_scorm_useBeaconAPI==='undefined'||window.mod_scorm_useBeaconAPI===!1){if(window.event&&['beforeunload','unload','pagehide'].indexOf(window.event.type)){window.mod_scorm_useBeaconAPI=!0}}
return(window.mod_scorm_useBeaconAPI&&canUseBeaconAPI())};var useSendBeacon=function(url,param){var vars=param.split('&'),i=0,pair,key,value,formData=new FormData();for(i=0;i<vars.length;i++){pair=vars[i].split('=');key=decodeURIComponent(pair[0]);value=decodeURIComponent(pair[1]);formData.append(key,value)}
formData.append('unloading','1');if(url.indexOf('?')===-1){url+='?api=beacon'}else{url+='&api=beacon'}
var outcome=navigator.sendBeacon(url,formData);if(!outcome){if(console&&console.log){console.log('mod_scorm: Failed to queue navigator.sendBeacon request')}
return"false\n101"}
return"true\n0"};if(useBeaconAPI()){return useSendBeacon(url,param)}
httpReq.open("POST",url,!1);httpReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');try{httpReq.send(param)}catch(e){if(console&&console.log){var message='XHR request from mod_scorm::DoRequest failed';if(canUseBeaconAPI()){message+='; attempting to use Beacon API.'}
console.log(message)}
if(canUseBeaconAPI()){return useSendBeacon(url,param)}
return!1}
if(httpReq.status==200){return httpReq.responseText}else{return httpReq.status}}
function popupwin(content){var op=window.open();op.document.open('text/plain');op.document.write(content);op.document.close()}
window.mod_scorm_useBeaconAPI=!1;function mod_scorm_monitorForBeaconRequirement(target){if(typeof target.mod_scorm_monitoring_for_beacon_requirement!=='undefined'){console.log('mod_scorm: unload event handlers already attached');return}
target.mod_scorm_monitoring_for_beacon_requirement=!0;if(!navigator||!navigator.sendBeacon){return}
var toggleOn=function(){window.mod_scorm_useBeaconAPI=!0};var toggleOff=function(){window.mod_scorm_useBeaconAPI=!1};var observe=function(on,callback){if(!target.addEventListener){console.log('Unable to attach page dismissal event listeners');return null}
return target.addEventListener(on,callback)};observe('beforeunload',toggleOn);observe('unload',toggleOn);observe('pagehide',toggleOn);observe('pageshow',toggleOff);observe('visibilitychange',function(){if(document.visibilityState==='visible'||document.visibilityState==='prerender'){toggleOff()}else if(document.visibilityState==='hidden'){toggleOn()}})}
mod_scorm_monitorForBeaconRequirement(window)