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
function hide(element) {
    element.style.display = "none";
}
function show(element) {
    element.style.display = "block";
}
function onClickBackLog(e) {
    show(domDialog);
}
function onClickCancel(e) {
    hide(domDialog);
}
const selects = document.querySelectorAll('.select');
const bgRemove = document.querySelector('.select-bg-remove')
selects.forEach(select => {
    select.addEventListener('click', (e) => {
        bgRemove.style.display = 'block';
        let menu = e.currentTarget.nextElementSibling;
        menu.style.display = 'block';
        bgRemove.addEventListener('click', (e) => {
            if (e.currentTarget.className = 'select-bg-remove') {
                bgRemove.style.display = 'none';
                menu.style.display = 'none';
            }
        });
    });
});

function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}

// Usage!


// ----------------------public preview------------------
domPublicShows = document.querySelectorAll('#public-show')
domPublicShows.forEach(domPublicShow => {
    domPublicShow.addEventListener('click', function (e) {
        public_alert(e);
    });
});
function public_alert(e) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Public'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Public!',
                'Your show has been public.',
                'success'
            )
            sleep(900).then(() => {
                location.href = "/actionShow?public=" + e.target.dataset.index;
            });
        }
    })
}
// ----------------------alert delete------------------
domDeleteShow = document.querySelectorAll('#delete-show')
domDeleteShow.forEach(deleteShow => {
    deleteShow.addEventListener('click', function (e) {
        delete_alert(e);
    });
});
function delete_alert(e) {
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
            sleep(900).then(() => {
                location.href = "/actionShow?delete=" + e.target.dataset.index;
            });
        }
    })
}
