
function validateBorder(borderError, textError) {
    borderError.style.border = "1px solid white";
    textError.textContent = ""
}
let domUsernameError = document.getElementById('usernameError');
let domUsername = document.getElementById('username')
domUsername.addEventListener('keyup', function(e) {
    validateBorder(domUsername, domUsernameError);
});
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
let domdateError = document.getElementById('date-error');
let domDate = document.querySelectorAll('#birth');
domDate.forEach(function(item){
    item.addEventListener('click', () => {
        domdateError.textContent = ""
    });
});
let domAddressError = document.getElementById('addressError');
let domAdress = document.getElementById('address')
domAdress.addEventListener('keyup', function(e) {
    validateBorder(domAdress, domAddressError);
});

// ------------hide and show passwords------
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function (e) {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});