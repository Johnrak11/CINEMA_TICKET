let domDropdown = document.querySelector('#hidden')
let domProfile = document.querySelector('#profile-user')
domProfile.addEventListener("click", (e) => {
    domDropdown.style.display = "block";


});
domDropdown.addEventListener("click", (e) => {
    if (e.target.id === 'background-hide') {
        domDropdown.style.display = "none";
    }
});
// -----------------------searchbar---------------
let domSearchBtn = document.querySelector("#btn-search");
let domSearContainer = document.querySelector("#search-container");
domSearchBtn.addEventListener("click", (e) => {
    console.log(e.target)
    domSearContainer.style.display = "block";

});
let domClearBtn = document.querySelector("#clare-search");
domClearBtn.addEventListener("click", (e) => {
    domSearContainer.style.display = "none";
    console.log(e.target)

});
// --------------------searchText------------------------
$(document).ready(function () {
    $("#search").keyup(function () {
        let searchText = $(this).val();
        if (searchText != "") {
            $.ajax({
                url: 'controllers/pages/components/search.controller.php',
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
