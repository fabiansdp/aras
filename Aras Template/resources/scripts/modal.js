// Get the modal
var modal = document.getElementsByClassName("myModal");

// Get the button that opens the modal
var btns = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
for(let i=0; i<btns.length; i++) {
    btns[i].onclick = function() {
        modal[i].style.display = "block";
        currModal = modal[i];
    }
}

// When the user clicks on <span> (x), close the modal
for(let i=0; i<span.length; i++) {
    span[i].onclick = function() {
        modal[i].style.display = "none";
    }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == currModal) {
        currModal.style.display = "none";
    }
}    


