$(document).ready(function () {
    $("#search").keyup(function () {
        let searchText = $(this).val();
        if (searchText != "") {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: { query: searchText },
                success: function (response) {
                    $("#show_list").html(response);
                }
            })
        }
        else {
            $("#show_list").html("");
        }
    })
});