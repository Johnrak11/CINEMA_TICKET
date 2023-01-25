function validateBorder(borderError, textError) {
    borderError.style.border = "1px solid white";
    textError.textContent = ""
}
let domEmailError = document.getElementById('emailError');
let domEmail = document.getElementById('email')
domEmail.addEventListener('keyup', function(e) {
    validateBorder(domEmail, domEmailError);
});
let domPasswordError = document.getElementById('passwordError');
let domPassword = document.getElementById('password')
domPassword.addEventListener('keyup', function(e) {
    validateBorder(domPassword, domPasswordError);
});