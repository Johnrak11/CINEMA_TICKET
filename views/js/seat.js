const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const seat_information = document.getElementsByClassName('seat-information');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');
const totailPrice = document.getElementById('totail-price');
const price = document.getElementById('show-price');
let paymentContainer = document.getElementById('payment-container');

//Seat click event
let seatList = {};
const letter = document.querySelectorAll('#seat-movie');
letter.forEach(seat => {
    seat.addEventListener('click', (e) => {
        let index = e.target.dataset.index;
        if (index in seatList) {
            delete seatList[index]
        } else if (index !== undefined) {
            seatList[index] = index;
        }
        let total_seat = document.getElementById("total-seat");
        total_seat.textContent = '';
        let count = 0
        for (let key in seatList) {
            count += 1
            total_seat.textContent += seatList[key] + ' ';
            let text = price.textContent;
            let new_text = text.slice(0, text.indexOf('$'))
            totailPrice.textContent = new_text * count + "$"

        };
    })

});
container.addEventListener('click', e => {
    if (e.target.classList.contains('seat') &&
        !e.target.classList.contains('occupied')) {
        e.target.classList.toggle('selected');
    }
});

let domMovieHall = document.querySelector(".movie-hall")
let btnTSelectTimes = document.querySelectorAll("#select-time")
btnTSelectTimes.forEach(btn => {
    btn.addEventListener("click", (e) => {
        displaySeat(e)
        let showDetail = e.currentTarget.dataset.index
        $(document).ready(function () {
            $.ajax({
                url: 'controllers/pages/components/booking_total.controller.php',
                method: 'get',
                data: { showDetail: showDetail },
                success: function (response) {
                    $("#totial-container").html(response);
                }
            })
        });
    });
});
let domCheckoutContainer = document.querySelector('#checkout-container')
let checkoutBtn = document.querySelector('#checkout')
checkoutBtn.addEventListener('click', (e) => {
    let totatSeat = document.querySelector('#total-seat').textContent
    if (totatSeat !== "") {
        if (e.currentTarget.classList.contains('credit-none')) {
            paymentContainer.style.display = "block";
            document.querySelector('#seat-information').style.filter = "blur(10px)";
        } else {
            domCheckoutContainer.style.display = "block";
            let domAddCreditcard = document.querySelector('#add-credit-card')
            domAddCreditcard.addEventListener('click', (e) => {
                paymentContainer.style.display = "block";
                domCheckoutContainer.style.display = "none";
                document.querySelector('#seat-information').style.filter = "blur(10px)";
            })
        }
    } else {
        isConfirmed('error', "Places select the seat first")
    }
});
paymentContainer.addEventListener('click', (e) => {
    if (e.target.id === 'payment-container') {
        paymentContainer.style.display = "none";
        document.querySelector('#seat-information').style.filter = "blur(0px)";
    }
})
domCheckoutContainer.addEventListener('click', (e) => {
    if (e.target.id === 'checkout-container') {
        domCheckoutContainer.style.display = "none";
    }
})
let domCheckoutCancel = document.querySelector('#checkout-cancel')
domCheckoutCancel.addEventListener('click', (e) => {
    domCheckoutContainer.style.display = "none";
})

let confirmCheckoutSubmit = document.querySelector('#checkout-submit')
let confirmCheckout = document.querySelector('#confirm-checkout')
confirmCheckout.addEventListener('click', (e) => {
    let totatSeat = document.querySelector('#total-seat').textContent
    document.querySelector('#seat-value-checkout').value = totatSeat
    confirmCheckoutSubmit.submit()
})
$(document).ready(function () {
    let btnHide = document.querySelector("#payment-container")
    btnHide.addEventListener("click", (e) => {
        if (e.target.id === 'payment-container') {
            $('html,body').animate({
                scrollTop: $("head").offset().top
            },
                'slow');
        }

    });
});
// -------------------validate-------------
function validateText(domText, min, max) {
    let text = domText.value
    if (text.length > min && text.length < max) {
        domText.style.border = '2px solid blue'
        return true
    } else {
        domText.style.border = '2px solid red'
        return false
    }
}
let domCardIcon = document.querySelector('#card-icon')
let domCardName = document.querySelector('#card-name')
domCardName.addEventListener("keyup", (e) => {
    validateText(domCardName, 2, 40)
});
let domCardType = document.getElementById("type-card");
let domCardNumber = document.querySelector('#card-number')
domCardNumber.addEventListener("keyup", (e) => {
    if (!checkcard()) {
        domCardNumber.style.border = '2px solid red'
        domCardIcon.src = "views/images/components_image/credit-card.png"
    } else {
        domCardNumber.style.border = '2px solid blue'
    }
});
let domCardDate = document.querySelector('#card-date')
domCardDate.addEventListener("keyup", (e) => {
    if (validate_exp(domCardDate.value)) {
        domCardDate.style.border = '2px solid blue'
    } else {
        domCardDate.style.border = '2px solid red'
    }
});
let domCardCvv = document.querySelector('#card-cvv')
domCardCvv.addEventListener("keyup", (e) => {
    validateCvv(domCardCvv)
});
let domFormSubmit = document.querySelector('#payment-form')
let domPaymentSubmit = document.querySelector('#payment-submit')
domPaymentSubmit.addEventListener("click", (e) => {
    let isTrue = true
    // ----------------name----------
    if (!isFillValidate(domCardName)) {
        isTrue = false;
    } else {
        if (!validateText(domCardName, 2, 40)) {
            isTrue = false
        }
    }
    // ---------------type--------
    if (!isFillValidate(domCardType)) {
        isTrue = false;
    }
    // --------------number-card-----
    if (!isFillValidate(domCardNumber)) {
        isTrue = false;
    } else {
        if (!checkcard()) {
            isTrue = false
        }
    }
    // --------------date-----
    if (!isFillValidate(domCardDate)) {
        isTrue = false;
    } else {
        if (!validate_exp(domCardDate.value)) {
            isTrue = false
        }
    }
    // -------------cvv--------
    if (!isFillValidate(domCardCvv)) {
        isTrue = false;
    } else {
        if (!validateCvv(domCardCvv)) {
            isTrue = false
        }
    }
    // --------------true-----
    if (isTrue) {
        let totatSeat = document.querySelector('#total-seat').textContent
        document.querySelector('#seat-value').value = totatSeat
        domFormSubmit.submit()
    }
})
function isFillValidate(domCardInput) {
    if (domCardInput.value == "") {
        domCardInput.style.border = "1px solid red";
        return false;
    } else {
        domCardInput.style.border = "1px solid blue";
        return true;
    }
}
function validateCvv(domElement) {
    if (domElement.value.length > 3) {
        domElement.style.border = '2px solid red';
        return false;
    } else {
        domElement.style.border = '2px solid blue';
        return true;
    }
}
// ---------------exp card----
function validate_exp(expId) {
    let dateNow = new Date()
    let isFound = true
    let isEqual = true
    let inputYear = ''
    let inputMonth = ''
    for (let index in expId) {
        if (expId[index] === '-') {
            isEqual = false
        } else if (isEqual) {
            inputYear += expId[index]
        } else {
            inputMonth += expId[index]
        }
    }
    if (dateNow.getFullYear() === Number(inputYear)) {
        if (dateNow.getMonth() >= Number(inputMonth)) {
            isFound = false
        }
    } else if (dateNow.getFullYear() > Number(inputYear)) {
        isFound = false
    }
    return isFound
}
function checkcard() {
    var type = document.getElementById("type-card").value;
    type = parseInt(type);
    var cardno = document.getElementById("card-number").value;
    // ---------- Master-Card---
    if (type == "1") {
        var regex = /^5[1-5]{1}[0-9]{2}[\s]?[0-9]{4}[\s]?[0-9]{4}[\s]?[0-9]{4}$/;
        if (regex.test(cardno)) {
            domCardIcon.src = "views/images/components_image/master-card.png"
            return true;
        }
    }
    // ---------------visa----------
    else if (type == "2") {
        var regex = /^4{1}[0-9]{3}[\s]?[0-9]{4}[\s]?[0-9]{4}[\s]?[0-9]{1}$/;
        var regex1 = /^4{1}[0-9]{3}[\s]?[0-9]{4}[\s]?[0-9]{4}[\s]?[0-9]{4}$/;
        if (regex.test(cardno) || regex1.test(cardno)) {
            domCardIcon.src = "views/images/components_image/visa.png"
            return true;
        }
    }
    // -------------------American Express Card---------
    else {
        var regex = /^3[4|7]{1}[0-9]{2}[\s]?[0-9]{4}[\s]?[0-9]{4}[\s]?[0-9]{3}$/;
        if (regex.test(cardno)) {
            domCardIcon.src = "views/images/components_image/american-express.png"
            return true;
        }
    }
    return false;
}
// ---------alert----
function successfulAlert(icon, message, id, detailId) {
    isConfirmed(icon, message)
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?id=' + id + '&detailId=' + detailId;
    window.history.pushState({ path: newurl }, '', newurl);
}
function isConfirmed(icon, message) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: icon,
        title: message,
    })
}

