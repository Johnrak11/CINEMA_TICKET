const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const seat_information = document.getElementsByClassName('seat-information');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');
const totailPrice = document.getElementById('totail-price');
const price = document.getElementById('show-price');

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
function displayPayment(e) {
    document.querySelector('#seat-information').style.display = "block";
    document.querySelector('.movie-hall').style.filter = "blur(10px)";
    domMovieHall.style.display = "none"
}
function displayNonePayment() {
    document.querySelector('#seat-information').style.display = "none";
    document.querySelector('.movie-hall').style.filter = "blur(0px)";
    domMovieHall.style.display = "block";
};
// $(document).ready(function () {
//     let btnTSelectTime = document.querySelectorAll("#select-time")
//     btnTSelectTime.forEach(btn => {
//         btn.addEventListener("click", () => {
//             $('html,body').animate({
//                 scrollTop: $("head").offset().top
//             },
//                 'slow');
//         });
//     });
// });