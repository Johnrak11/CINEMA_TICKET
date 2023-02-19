
// Print ticket 
let domPrintBtn = document.querySelector('#print-btn')
domPrintBtn.addEventListener('click', function(e) {
    printTicket();
})
function printTicket() {
    console.log('hello')
    let ticket_image =  document.querySelector('#image-print')
    domtoimage.toBlob(ticket_image).then(function (blob) {
        window.saveAs(blob, "ticket.png");
    });
}