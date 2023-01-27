let domDropdown = document.querySelector('#hidden')
let domProfile = document.querySelector('#profile-user')
domProfile.addEventListener("click", (e) => {
    domDropdown.style.display = "block";
    

});
domDropdown.addEventListener("click", (e) => {
    if (e.target.id === 'background-hide'){
        domDropdown.style.display = "none";
    }
});
