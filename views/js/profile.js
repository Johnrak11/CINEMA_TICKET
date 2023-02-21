let getInfo = document.querySelector(".info-user");
let getEdit = document.querySelector(".edit-profile");
let changeImage = document.querySelector("#change-image");
let btnSave = document.querySelector("#save-profile");
let btnEdit = document.querySelector("#btn-action");
let updateProfile = document.querySelector("#form-edit");
let nameUser = document.querySelector(".name");
let inputName = document.querySelector("#name-input");
let inputImage = document.querySelector("#inputTag");


function hide(event) {
    event.style.display = "none";
}
function show(event) {
    event.style.display = "block";
}

function btnEditProfile(e) {
    hide(getInfo);
    show(getEdit);
    show(changeImage);
    show(btnSave);
    hide(btnEdit);
    hide(nameUser)
}
function validateName(inputValue) {
    // var name = inputValue.value
    if (/^[A-Za-z\s]+$/.test(inputValue) && inputValue.length > 2 && inputValue.length < 40 && inputValue !== "") {
        // inputValue.className = 'input-green'
        return true
    }
    else {
        // inputValue.className = 'input-red'
        // document.querySelector(domMessage).textContent = message;
        return false
    }
}
let domSaveBtn = document.querySelector('#save-profile')
domSaveBtn.addEventListener('click',(e) => {
    saveProfile(e)
});
function saveProfile(e)
{
    if (validateName(inputName.value) && inputImage)  {
        document.querySelector("#form-edit-submit").submit()
    }
}


