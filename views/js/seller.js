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
let isPublic = '';
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
let productRows = document.querySelectorAll('.products-row')
productRows.forEach(row => {
    row.addEventListener('click',(e) => {
        console.log(e.target.id)
       
    });
})

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
            if (isPublic === 'exist'){
                isConfirmed('error',"This show already exists")
            }else{
                isConfirmed('success',"Your show has been publiced")
                sleep(900).then(() => {
                    location.href = "/actionShow?public=" + e.target.dataset.index;
                });
            }
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
            sleep(1000).then(() => {
                location.href = "/actionShow?delete=" + e.target.dataset.index;
            });
        }
    })
}
// ---------------------------codition alert------------------
function isConfirmed(icon,message) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 1500,
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
// ---------------------------ajax-----comfirm--------------
$(document).ready(function () {
    let domPublicShows = document.querySelectorAll('#public-show')
    domPublicShows.forEach(domPublicShow =>{
        $(domPublicShow).click(function (e) {
            let nameShow = e.currentTarget.dataset.show;
            if (nameShow != "") {
                $.ajax({
                    url: 'controllers/pages/components/is_public.controller.php',
                    method: 'get',
                    data: { showName: nameShow},
                    success: function (response) {
                        isPublic = response
                    }
                })
            }
        })
    });
});