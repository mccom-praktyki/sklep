function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "includes/acp/upload_ajax.php");
	ajax.send(formdata);
}
function progressHandler(event){
	var percent = (event.loaded / event.total) * 100;
	$("#progressBar").width(Math.round(percent)+"%");
	_("status").innerHTML = Math.round(percent)+"% przesy³anie ... proszê czekaæ.";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	$("#progressBar").width("0%");
}
function errorHandler(event){
	_("status").innerHTML = "Przesy³anie nie powiod³o siê.";
}
function abortHandler(event){
	_("status").innerHTML = "Przesy³anie anulowane";
}