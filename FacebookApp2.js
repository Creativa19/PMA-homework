

function App (name, logo, welcomemessage, logoutmessage, updateURL){
	this.name = name;
	this.logo = logo;
	this.open = function (){
	return document.write(welcomemessage);}
	this.close = function () {
	document.write(logoutmessage);}
	this.update = function() {
	window.location.replace(updateURL);}
}
var AppFacebook = new App("Facebook", "logo.gif","Welcome Dude", "Goodbye", "https://facebook.com/update/");
AppFacebook.open();
AppFacebook.close();
AppFacebook.update();

var AppFacebook2 = Object.create(AppFacebook);
AppFacebook2.name = ("Instagram");
AppFacebook.update = ("https://instagram.com/update/");
	

