$(document).on('keypress', '#inputTextBox', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {

      document.getElementById('errorMsg1').style.display = 'block';
document.getElementById('errorMsg1').style.color = 'red';
document.getElementById('errorMsg1').innerHTML = 'OOPs! Only Characters allowed.';
return false;
} else {
document.getElementById('errorMsg1').style.display = 'none';
return true;
        // event.preventDefault();
        // return false;
    }
});
// FOr only characters with space and messege



function checkOnlyDigits(e) {
e = e ? e : window.event;
var charCode = e.which ? e.which : e.keyCode;
if (charCode < 48 || charCode > 57) {
document.getElementById('errorMsg').style.display = 'block';
document.getElementById('errorMsg').style.color = 'red';
document.getElementById('errorMsg').innerHTML = 'OOPs! Only digits allowed.';
return false;
} else {
document.getElementById('errorMsg').style.display = 'none';
return true;
}
}
// function for only digits with error messege



 function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
           document.getElementById('errorMsg3').style.display = 'block';
document.getElementById('errorMsg3').style.color = 'red';
document.getElementById('errorMsg3').innerHTML = 'OOPs! Enter Valid email.';
            return false;
        }

        return true;

}
// email with particular format



