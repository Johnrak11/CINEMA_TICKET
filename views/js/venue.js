
// ------------------------add venue------------------

let domVenueSubmit = document.querySelector("#venue-submit")
let domVenueFrom = document.querySelector("#venue-form")
let AllVenues = document.querySelectorAll("#venue-name-check")
let domCreateVenue = document.querySelector('.app-content-headerButton')
let domCancel = document.querySelector('#cencel-venue')
let domInputName = document.querySelector('.venue-name')
let domInputAddress = document.querySelector('.address-name')
let domSubmit = document.querySelector("#nextBtn")
let domId = document.querySelector("#id-venue")
let domDelete = document.querySelectorAll("#venue-delete")
domDelete.forEach(deleteBtn => {
    deleteBtn.addEventListener('click', (e) => {
        delete_alert(e.currentTarget.dataset.index)
    });
})
function validateVenu(inputValue) {
    var name = inputValue.value
    if (/^[A-Za-z\s]+$/.test(name)) {
        inputValue.style.border = '2px solid green'
        return true
    }
    else {
        inputValue.style.border = '2px solid red'
        return false
    }
}
function checkName(name) {
    let isFound = true
    AllVenues.forEach(allVenue => {
        if (allVenue.textContent === name.value) {
            isFound = false
        }
    })
    return isFound;

}
function inputCheck(domInput) {
    let isFound = false
    if (domInput.value !== "") {
        isFound = true
    }
    return isFound;
}
function addressValidate(domInput) {
    let isFound = false
    let numString = domInput.value
    if (domInput.value !== "" && numString.length < 100) {
        isFound = true
    }
    return isFound;
}

domCreateVenue.addEventListener('click', function (e) {
    domVenueFrom.style.display = 'flex';
    domInputName.value = ''
    domInputAddress.value = ''
    domSubmit.textContent = 'Create';
});

domCancel.addEventListener('click', function (e) {
    domVenueFrom.style.display = 'none';
});


domInputName.addEventListener('keyup', function (e) {
    validateVenu(domInputName)
})

domInputAddress.addEventListener('keyup', function (e) {
    if (addressValidate(domInputAddress)) {
        domInputAddress.style.border = '2px solid green';
    }
})

domSubmit.addEventListener('click', function (e) {
    console.log(e.target);
    if (e.currentTarget.textContent === "Create") {
        if (validateVenu(domInputName) && checkName(domInputName) && inputCheck(domInputName) && addressValidate(domInputAddress)) {
            domInputName.style.border = '2px solid green'
            domVenueSubmit.action = ("controllers/pages/admin/venue_action/venue_create.controller.php")
            domVenueSubmit.submit()

        } else {
            domInputName.style.border = '2px solid red'
        }
        if (!addressValidate(domInputAddress)) {
            domInputAddress.style.border = '2px solid red'
        }
    }
    if (e.currentTarget.textContent === "Update") {
        if (validateVenu(domInputName) && checkName(domInputName) && inputCheck(domInputName) && addressValidate(domInputAddress)) {
            domInputName.style.border = '2px solid green'
            domVenueSubmit.action = ("controllers/pages/admin/venue_action/venue_edit.controller.php")
            domVenueSubmit.submit()

        } else {
            domInputName.style.border = '2px solid red'
        }
        if (!addressValidate(domInputAddress)) {
            domInputAddress.style.border = '2px solid red'
        }
    }
})
// ------------------------edit venue------------------------------
let domEditBtn = document.querySelectorAll('#venue-edit')
domEditBtn.forEach(bntEdit => {
    bntEdit.addEventListener('click', (e) => {
        domVenueFrom.style.display = 'flex';
        let valueAddress = e.currentTarget.parentElement.previousElementSibling.firstElementChild.textContent
        let valueName = e.currentTarget.parentElement.parentElement.firstElementChild.firstElementChild.textContent
        domInputName.value = valueName
        domInputAddress.value = valueAddress
        domId.value = e.currentTarget.dataset.index
        domSubmit.textContent = 'Update';
    })
})

function delete_alert(btn) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
            console.log(btn)
            sleep(900).then(() => {
                location.href = "/venueDetele?id=" + btn;
            });
        }
    })
}
function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}
