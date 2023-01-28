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

// ------------hide and show passwords------
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});