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
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
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
// ----------------teb 1 dom--------------------------
let domTitle = document.querySelector('#title')
domTitle.addEventListener('keyup', (e) => {
    validateText(domTitle, 2, 40)
});
let domauthor = document.querySelector('#author')
domauthor.addEventListener('keyup', (e) => {
    validateName(domauthor)
});
let domhour = document.querySelector('.hour')
domhour.addEventListener('keyup', (e) => {
    validateNumber(domhour)
});
let domMinute = document.querySelector('.minute')
domMinute.addEventListener('keyup', (e) => {
    validateHour(domMinute)
});
let domSecond = document.querySelector('.second')
domSecond.addEventListener('keyup', (e) => {
    validateHour(domSecond)
});
let domScreen = document.querySelector('#screen')
let domTypeMovie = document.querySelector('#type-movie')
let domImage = document.querySelector('#inputTag')
let domTrailler = document.querySelector('#trailler')
domTrailler.addEventListener('keyup', (e) => {
    validateUrl(domTrailler)
});
let domDescription = document.querySelector('#description')
domDescription.addEventListener('keyup', (e) => {
    validateText(domDescription, 5, 250)
});

// ------------title---check-----
function validateFailedBorders(domInput) {
    let valueInput = domInput.value;
    console.log(valueInput)
    if (valueInput !== "") {
        domInput.className = 'input-green'
        return true;
    }
    else {
        domInput.className = 'input-red';
        return false;
    }
}

function validateFailed() {
    if (validateFailedBorders(domTitle) &&
        validateFailedBorders(domauthor) &&
        validateFailedBorders(domhour) &&
        validateFailedBorders(domMinute) &&
        validateFailedBorders(domSecond) &&
        validateFailedBorders(domScreen) &&
        validateFailedBorders(domTypeMovie) &&
        validateFailedBorders(domImage) &&
        validateFailedBorders(domTrailler) &&
        validateFailedBorders(domDescription)) {
        return true;
    }
    else {
        return false;
    }
}

function validateUrl(domUrl) {
    let url = domUrl.value
    if (isValidUrl(url)) {
        domUrl.className = 'input-green'
        return true
    } else {
        domUrl.className = 'input-red'
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

function validateHour(domNum) {
    let number = parseInt(domNum.value);
    if (Number.isInteger(number) && number >= 0 && number <= 59) {
        domNum.className = 'input-green'
        return true
    } else {
        domNum.className = 'input-red'
        return false
    }
}

function validateNumber(domNum) {
    let number = parseInt(domNum.value);
    if (Number.isInteger(number) && number >= 0 && number <= 10) {
        domNum.className = 'input-green'
        return true
    } else {
        domNum.className = 'input-red'
        return false
    }
}

function validateText(domText, min, max) {
    let text = domText.value
    if (text.length > min && text.length < max) {
        domText.className = 'input-green'
        return true
    } else {
        domText.className = 'input-red'
        return false
    }
}

function validateName(inputValue) {
    var name = inputValue.value
    if (/^[A-Za-z\s]+$/.test(name) && name.length > 2 && name.length < 40) {
        inputValue.className = 'input-green'
        return true
    }
    else {
        inputValue.className = 'input-red'
        return false
    }
}

function validateForm() {
    // This function deals with validation of the form fields
    let valid = false;
    // if (validateText(domTitle, 2, 40) &&
    //     validateName(domauthor) &&
    //     validateNumber(domhour) &&
    //     validateHour(domMinute) &&
    //     validateHour(domSecond) &&
    //     validateUrl(domTrailler) &&
    //     validateText(domDescription, 5, 250));{
    //         valid = true;
    //     }
    if (validateText(domTitle, 2, 40)) {
        valid = true;
    }
    // if (validateName(domauthor)) {
    //     valid = true;
    // }
    // if (validateName(domauthor)) {
    //     valid = true;
    // }
    // if (validateName(domauthor)) {
    //     valid = true;
    // }
    

    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}
