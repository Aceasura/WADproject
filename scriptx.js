

var attempt = 3;
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

if ( username == "Marsya" && password == "123456"){
alert ("Login successfully");
window.location = "http://hyperverve.com/";
return false;
}
else if ( username == "Ashura" && password == "123456"){
alert ("Login successfully");
window.location = "http://hyperverve.com/";
return false;
}
else if ( username == "Krittika" && password == "123456"){
alert ("Login successfully");
window.location = "http://hyperverve.com/";
return false;
}
else if ( username == "Min" && password == "123456"){
alert ("Login successfully");
window.location = "http://hyperverve.com/";
return false;
}
else{
attempt --;// Decrementing by one.
alert( +attempt+ " attempts left before the termination of your life.");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}