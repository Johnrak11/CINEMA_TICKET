// ---------------------------history----------------
let domHistory = document.querySelector('#history');
let domCancel = document.querySelector('.cancel');
let domCard = document.querySelector('.card');



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
}
function onClickCancel(e) {
    hide(domDialog);
}

function onClickCancelCard(e) {
    hide(domCard);
}