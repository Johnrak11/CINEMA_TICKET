// ---------------------------history----------------
let domHistory = document.querySelector('#history');
let domNavbar = document.querySelector('#navbar');
let domViewTicket = document.querySelector('#view-ticket')

domHistory.addEventListener('click', function (e) {
    if (e.target.id === 'backlog') {
        domHistory.style.display = 'none';
    }
});
let domDialog = document.querySelector('.history');

function hide(element) {
    element.style.display = "none";
}
function show(element) {
    element.style.display = "block";
}
function onClickHistory(e) {
    show(domDialog);
    hide(domNavbar);

}

function onClickCancel(e) {
    hide(domDialog);
    show(domNavbar);
}


