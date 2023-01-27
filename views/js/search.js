$(document).ready(function () {
    $("#search").keyup(function () {
        let searchText = $(this).val();
        if (searchText != "") {
            $.ajax({
                url: 'controllers/pages/search.controller.php',
                method: 'get',
                data: { query: searchText },
                success: function (response) {
                    $("#show-list").html(response);
                }
            })
        }
        else {
            $("#show-list").html("");
        }
    })
});