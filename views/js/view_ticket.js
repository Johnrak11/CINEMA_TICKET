let domPrintBtn = document.querySelector('#print-btn')
domPrintBtn.addEventListener('click', function(e) {
    PrintPage();
});
function PrintPage() {
    window.print()
}