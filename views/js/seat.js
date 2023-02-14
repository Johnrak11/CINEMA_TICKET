const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const seat_information = document.getElementsByClassName('seat-information');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');
//Update total and count
// function updateSelectedCount() {
//     const selectedSeats = document.querySelectorAll('.row .seat.selected');
//     const selectedSeatsCount = selectedSeats.length;
//     count.innerText = selectedSeatsCount;
// }

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
        total_seat.textContent = 'Seat: ';
        // console.log(seatList)
        for (let key in seatList) {
            total_seat.textContent += seatList[key] + ' ';
            // console.log(seatList[key])        
        };
    })

});
container.addEventListener('click', e => {
    if (e.target.classList.contains('seat') &&
        !e.target.classList.contains('occupied')) {
        e.target.classList.toggle('selected');
    }
});
function displaySeat() {
    document.querySelector('#seat-information').style.display = "block";
    document.querySelector('.movie-hall').style.filter = "blur(10px)";
}
function displayNone() {
    document.querySelector('#seat-information').style.display = "none";
    document.querySelector('.movie-hall').style.filter = "blur(0px)";
};
