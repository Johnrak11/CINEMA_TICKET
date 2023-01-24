let domUsernameError = document.getElementById('usernameError');
let domUsername = document.getElementById('username')
domUsername.addEventListener('keyup', function (e) {
    validateBorder(domUsername, domUsernameError);
});
let domEmailError = document.getElementById('emailError');
let domEmail = document.getElementById('email')
domEmail.addEventListener('keyup', function (e) {
    validateBorder(domEmail, domEmailError);
});
let domPasswordError = document.getElementById('passwordError');
let domPassword = document.getElementById('password')
domPassword.addEventListener('keyup', function (e) {
    validateBorder(domPassword, domPasswordError);
});
let domdateError = document.getElementById('dateError');
let domDate = document.getElementById('date')
domDate.addEventListener('keyup', function (e) {
    validateBorder(domDate, domdateError);
});
let domAddressError = document.getElementById('addressError');
let domAdress = document.getElementById('address')
domAdress.addEventListener('keyup', function (e) {
    validateBorder(domAdress, domAddressError);
});


function validateBorder(borderError, textError) {
    console.log('hello')
    borderError.style.border = "1px solid white";
    textError.textContent = ""
}