document.querySelector(".grid").addEventListener("click", function () {
    document.querySelector(".list").classList.remove("active");
    document.querySelector(".grid").classList.add("active");
    document.querySelector(".products-area-wrapper").classList.add("gridView");
    document
        .querySelector(".products-area-wrapper")
        .classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function () {
    document.querySelector(".list").classList.add("active");
    document.querySelector(".grid").classList.remove("active");
    document.querySelector(".products-area-wrapper").classList.remove("gridView");
    document.querySelector(".products-area-wrapper").classList.add("tableView");
});

var modeSwitch = document.querySelector('.mode-switch');
modeSwitch.addEventListener('click', function () {
    document.documentElement.classList.toggle('light');
    modeSwitch.classList.toggle('active');
});
// backlog
let domBacklog = document.querySelector('#backlog');
domBacklog.addEventListener('click', function (e) {
    if (e.target.id === 'backlog') {
        domBacklog.style.display = 'none';
    }
});
let domDialog = document.querySelector('.backlog');
function hide(element)
{
    element.style.display = "none";
}
function show(element) 
{
    element.style.display = "block";
}
function onClickBackLog(e)
{
    show(domDialog);
}
function onClickCancel(e)
{
    hide(domDialog);
}

// // dropdowns//
const dropdowns = document.querySelectorAll('.dropdown');
dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelector('.menu li');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked')
        menu.classList.toggle('menu-open');
        
        // options.forEach(option => {
        //     option.addEventListener('click', () => {
        //         selected.innerText = option.innerText;
        //         select.classList.remove('select-clicked');
        //         menu.classList.remove('menu-open');
        //         options.forEach(option => {
        //             option.classList.remove('active');
        //         });
        //         option.classList.add('active');
        //     })
        // })
    })
})
