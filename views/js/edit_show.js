let titleEdit = document.getElementById('title-edit').textContent;
let durationEdit = document.getElementById('duration-edit').textContent;
let dateEdit = document.getElementById('date-edit').textContent;
let authorEdit = document.getElementById('author-edit').textContent;
let lenguageEdit = document.getElementById('lenguage-edit').textContent;
let descriptionEdit = document.getElementById('description-edit').textContent;
let domVenueEdit = document.querySelector('.dom-venue-edit');
let editVenueBtn = document.querySelector('#edit');

editVenueBtn.addEventListener('click', () => {
})

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
}
let domEditSow = document.querySelector("#venue-form")
let domEditSowBtn = document.querySelector("#edit-show")
domEditSowBtn.addEventListener('click', (e) => {
    domEditSow.style.display = 'flex';
    // domTitle.style.border = "green solid";
    // domauthor.style.border = "green solid";
    // domhour.style.border = "green solid";
    // domMinute.style.border = "green solid";
    // domDescription.style.border = "green solid";
    // domScreen.style.border = "green solid";
    // domScreen.style.border = "green solid";
    // domTypeMovie.style.border = "green solid";
    // domLanguageMovie.style.border = "green solid";
    // domImage.style.border = "green solid";
    // domTrailler.style.border = "green solid";
    // domHall.style.border = "green solid";
})
let domEditCancelBtn = document.querySelector("#canBtn")
domEditCancelBtn.addEventListener('click', (e) => {
    domEditSow.style.display = 'none';
})

// ====================( input value ) =================
let title = document.querySelector("#title");
title.value = titleEdit;

let author = document.querySelector("#author");
author.value = authorEdit;

let description = document.querySelector("#description");
description.value = descriptionEdit;

strDate = durationEdit;
arr = strDate.split(':');
hourEdit = $.trim(arr[0]);
minEdit = $.trim(arr[1]);

let hours = document.querySelector("#hour");
hours.value = hourEdit;

let minutes = document.querySelector("#minute");
minutes.value = minEdit;
// // ----------------teb 1 dom--------------------------

let domTitle = document.querySelector('#title')
domTitle.addEventListener('keyup', (e) => {
    validateText(domTitle, 2, 40, '#title-message', 'title must be more than 40 and less than 3 characters')
});
let domauthor = document.querySelector('#author')
domauthor.addEventListener('keyup', (e) => {
    validateName(domauthor, '#author-message', "Name must be a text")
});
let domhour = document.querySelector('.hour')
domhour.addEventListener('keyup', (e) => {
    validateNumber(domhour, '#duration-message', "Hour must be less than 10 hours")
});
let domMinute = document.querySelector('.minute')
domMinute.addEventListener('keyup', (e) => {
    validateHour(domMinute, '#duration-message', "Minute must be less than 60 hours")
});
let domScreen = document.querySelector('#screen')
domScreen.addEventListener("click", (e) => {
    document.querySelector("#screen-message").textContent = "";
    domScreen.className = 'input-green';

})
let domTypeMovie = document.querySelector('#type-movie')
domTypeMovie.addEventListener("click", (e) => {
    document.querySelector("#category-message").textContent = "";
    domTypeMovie.className = 'input-green';

})
let domLanguageMovie = document.querySelector('#language')
domLanguageMovie.addEventListener("click", (e) => {
    document.querySelector("#language-message").textContent = "";
    domLanguageMovie.className = 'input-green';

})
let input = document.getElementById("inputTag");
let imageName = document.getElementById("imageName")

input.addEventListener("change", () => {
    let inputImage = document.querySelector("input[type=file]").files[0];

    imageName.innerText = inputImage.name;
})

let domImage = document.querySelector('#image')
domImage.addEventListener("click", (e) => {
    document.querySelector("#image-message").textContent = "";
    domImage.className = 'input-green rounded-3xl p-2.5 mt-4 ';

})
let domTrailler = document.querySelector('#trailler')
domTrailler.addEventListener('keyup', (e) => {
    validateUrl(domTrailler, '#trailler-message', "Trailler must be a URL")
});
let domDescription = document.querySelector('#description')
domDescription.addEventListener('keyup', (e) => {
    validateText(domDescription, 10, 250, "#descripton-message", "description must be at least 250 characters and more than 3")
});
let domDate = document.querySelector('#date')
domDate.addEventListener('click', (e) => {
    document.querySelector("#date-message").textContent = "";
    domDate.style.border = "green solid";


});
let domTime = document.querySelector('#time')
domTime.addEventListener('click', (e) => {
    document.querySelector("#time-message").textContent = "";
    domTime.style.border = "green solid";

});
let domHall = document.querySelector('#hall-show');
domHall.addEventListener('click', (e) => {
    document.querySelector("#hall-message").textContent = "";
    domHall.style.border = "green solid";


});
let domVenue = document.querySelector('#venue-name')
domVenue.addEventListener('click', (e) => {

    document.querySelector("#venue-name-message").textContent = "";
    domVenue.className = 'input-green';
});

function validateFailedBorders(domInput, domMessage, message) {
    let valueInput = domInput.value;
    if (valueInput !== "") {
        domInput.className = 'input-green'
        document.querySelector(domMessage).textContent = '';
        return true;
    }
    else {
        domInput.className = 'input-red';
        document.querySelector(domMessage).textContent = message;
        return false;
    }
}
function validateFailed() {

    let isFill = true;
    if (validateFailedBorders(domTitle, "#title-message", "Title must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domauthor, "#author-message", "Author must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domhour, "#duration-message", "Duration must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domMinute, "#duration-message", "Duration must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domScreen, "#screen-message", "Screen must be select")) {
        isFill = false;
    }
    if (validateFailedBorders(domTypeMovie, "#category-message", "Category must be select")) {
        isFill = false;
    }
    if (validateFailedBorders(domImage, "#image-message", "Image must be chooes")) {
        isFill = false;
    }
    if (validateFailedBorders(domTrailler, "#trailler-message", "Trailler must be input")) {
        isFill = false;
    }
    if (validateFailedBorders(domDescription, "#descripton-message", "Descripton must be input")) {
        isFill = false;
    }
    return isFill;
}

function validateUrl(domUrl, domMessage, message) {
    let url = domUrl.value
    if (isValidUrl(url)) {
        domUrl.className = 'input-green'
        document.querySelector(domMessage).textContent = '';
        return true
    } else {
        domUrl.className = 'input-red'
        document.querySelector(domMessage).textContent = message;
        return false
    }
}

function isValidUrl(string) {
    try {
        new URL(string);
        return true;
    } catch (err) {
        return false;
    }
}

function validateHour(domNum, domMessage, message) {
    let number = parseInt(domNum.value);
    if (Number.isInteger(number) && number >= 0 && number <= 59) {
        domNum.className = 'input-green'
        document.querySelector(domMessage).textContent = '';
        return true
    } else {
        domNum.className = 'input-red'
        document.querySelector(domMessage).textContent = message;
        return false
    }
}

function validateNumber(domNum, domMessage, message) {
    let number = parseInt(domNum.value);
    if (Number.isInteger(number) && number >= 0 && number <= 10) {
        domNum.className = 'input-green'
        document.querySelector(domMessage).textContent = '';
        return true
    } else {
        domNum.className = 'input-red'
        document.querySelector(domMessage).textContent = message;
        return false
    }
}

function validateText(domText, min, max, domMessage, message) {
    let text = domText.value
    if (text.length > min && text.length < max && text !=="") {
        domText.className = 'input-green'
        document.querySelector(domMessage).textContent = ''
        return true
    } else {
        domText.className = 'input-red'
        document.querySelector(domMessage).textContent = message
        return false
    }
}

function validateName(inputValue, domMessage, message) {
    var name = inputValue.value
    if (/^[A-Za-z\s]+$/.test(name) && name.length > 2 && name.length < 40) {
        inputValue.className = 'input-green'
        document.querySelector(domMessage).textContent = '';
        return true
    }
    else {
        inputValue.className = 'input-red'
        document.querySelector(domMessage).textContent = message;
        return false
    }
}

function validateForm() {
    // This function deals with validation of the form fields
    let valid = true;
    if (validateFailed()) {
        valid = false
    }
    else if (!validateText(domTitle, 2, 40, '#title-message', 'title must be more than 40 and less than 3 characters')) {
        valid = false;
    }
    else if (!validateName(domauthor, '#author-message', "Name must be a text")) {
        valid = false;
    }
    else if (!validateNumber(domhour, '#duration-message', "Hour must be less than 10 hours")) {
        valid = false;
    }
    else if (!validateHour(domMinute, '#duration-message', "Minute must be less than 60 hours")) {
        valid = false;
    }
    else if (!validateUrl(domTrailler, '#trailler-message', "Trailler must be a URL")) {
        valid = false;
    }
    else if (!validateText(domDescription, 3, 250, "#descripton-message", "description must be at least 250 characters and more than 3")) {
        valid = false;
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";

    }
    return true; // return the valid status
}