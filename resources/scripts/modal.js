// Get the modal
var modal = document.getElementsByClassName("myModal");

// Get the button that opens the modal
var btns = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
for(let i=0; i<btns.length; i++) {
    btns[i].onclick = function() {
        modal[0].style.display = "block";
    }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal[0].style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal[0]) {
        modal[0].style.display = "none";
    }
}    
