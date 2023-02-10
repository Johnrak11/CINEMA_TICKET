var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("canBtn").style.display = "inline";
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("canBtn").style.display = "none";
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}
function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()){
        return false;
    } 
        
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("nextBtn").type = "submit"
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}
let input = document.getElementById("inputTag");
let imageName = document.getElementById("imageName")

input.addEventListener("change", () => {
    let inputImage = document.querySelector("input[type=file]").files[0];

    imageName.innerText = inputImage.name;
})
// ---------------------------------dom message -------------------


// ----------------teb 1 dom--------------------------
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
let domSecond = document.querySelector('.second')
domSecond.addEventListener('keyup', (e) => {
    validateHour(domSecond, '#duration-message', "Second must be less than 60 hours")
});
let domScreen = document.querySelector('#screen')
let domTypeMovie = document.querySelector('#type-movie')
let domImage = document.querySelector('#inputTag')
let domTrailler = document.querySelector('#trailler')
domTrailler.addEventListener('keyup', (e) => {
    validateUrl(domTrailler, '#trailler-message', "Trailler must be a URL")
});
let domDescription = document.querySelector('#description')
domDescription.addEventListener('keyup', (e) => {
    validateText(domDescription, 10, 250, "#descripton-message", "description must be at least 250 characters and more than 3")
});
let domVenue = document.querySelector('#venue-name')
domVenue.addEventListener('keyup', (e) => {
    validateText(domVenue, 3, 50, "#venue-name-message", "Venue name must be at least 50 characters and more than 3")
});
let domAddress = document.querySelector('#venue')
domAddress.addEventListener('keyup', (e) => {
    console.log('here')
    validateText(domAddress, 3, 100, "#address-message", "Venue address must be at least 100 characters and more than 3")
})
// ------------title---check-----
function validateFailedBorders(domInput,domMessage, message) {
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
    if (validateFailedBorders(domTitle,"#title-message","Title must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domauthor,"#author-message","Author must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domhour,"#duration-message","Duration must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domMinute,"#duration-message","Duration must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domSecond,"#duration-message","Duration must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domSecond,"#duration-message","Duration must be fill")) {
        isFill = false;
    }
    if (validateFailedBorders(domScreen,"#screen-message","Screen must be select")) {
        isFill = false;
    }
    if (validateFailedBorders(domTypeMovie,"#category-message","Category must be select")) {
        isFill = false;
    }
    if (validateFailedBorders(domImage,"#image-message","Image must be chooes")) {
        isFill = false;
    }
    if (validateFailedBorders(domTrailler,"#trailler-message","Trailler must be input")) {
        isFill = false;
    }
    if (validateFailedBorders(domDescription,"#descripton-message","Descripton must be input")) {
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
    if (text.length > min && text.length < max) {
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
    let test = true;
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
    else if (!validateHour(domSecond, '#duration-message', "Second must be less than 60 hours")) {
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
