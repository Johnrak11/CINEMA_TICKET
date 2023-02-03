$(document).ready(function () {
    $("#show-more").click(function () {
        let domCard = document.querySelectorAll(".card")
        let numebRows = domCard.length + 8;
        if (history.pushState) {
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?rowCard=' + numebRows;
            window.history.pushState({path:newurl},'',newurl);
        }
        $.ajax({
            url: 'controllers/pages/components/show_more.controller.php',
            method: 'get',
            data: { row: numebRows },
            success: function (response) {
                $("#card-show-container").html(response);
            }
        })
    })
});