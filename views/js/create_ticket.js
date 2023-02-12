
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
}
// ----------------teb 1 dom--------------------------
let domDate = document.querySelector('#date')
domDate.addEventListener('click', (e) => {
    document.querySelector("#date-message").textContent = "";
    domDate.style.border = "";

});
let domTime = document.querySelector('#time')
domTime.addEventListener('click', (e) => {
    document.querySelector("#time-message").textContent = "";
    domDate.style.border = "";
});
let domHall = document.querySelector('#hall')
domHall.addEventListener('click', (e) => {
    document.querySelector("#hall-message").textContent = "";
    domDate.style.border = "";

});
let domVenue = document.querySelector('#venue-name')
domVenue.addEventListener('click', (e) => {
    document.querySelector("#venue-name-message").textContent = "";
    domDate.style.border = "";
});

