
// const hamburger = document.querySelector(".hamburger");
// const navMenu = document.querySelector(".nav-menu");
// hamburger.addEventListener("click", () => {
//     hamburger.classList.toggle("active");
//     navMenu.classList.toggle("active");
// })
// document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
//     hamburger.classList.remove("active");
//     navMenu.classList.remove("active");
// }))
let domDropdown = document.querySelector('#hidden')
let domProfile = document.querySelector('#profile-user')
domProfile.addEventListener("click", (e) => {
    domDropdown.style.display = "block";
    console.log(e.target)

});
domDropdown.addEventListener("click", (e) => {
    if (e.target.id === 'background-hide'){
        domDropdown.style.display = "none";
    }
})