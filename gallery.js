// Get the modal
var modal = document.getElementById("imageModal");

// Get the modal image element
var modalImg = document.getElementById("modalImage");

// Get the <span> element to close the modal
var span = document.getElementsByClassName("close")[0];

// Get all image thumbnails
var images = document.querySelectorAll(".thumbnail");

// Function to open the modal when an image is clicked
images.forEach(function(img) {
    img.onclick = function() {
        modal.style.display = "flex"; // Show the modal
        modalImg.src = this.src;      // Set the modal image to the clicked image
    };
});

// Close the modal when the user clicks the close button (x)
span.onclick = function() {
    modal.style.display = "none";
}

// Close the modal if the user clicks anywhere outside the modal
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}









function allimages(){
    document.getElementById("image1").style.display=""
    document.getElementById("image2").style.display=""
    document.getElementById("image3").style.display=""
    document.getElementById("image4").style.display=""
    document.getElementById("image5").style.display=""
    document.getElementById("image6").style.display=""
    document.getElementById("image7").style.display=""
    document.getElementById("image8").style.display=""
    document.getElementById("image9").style.display=""
    document.getElementById("image10").style.display=""
    document.getElementById("image11").style.display=""
    document.getElementById("image12").style.display=""
    document.getElementById("image13").style.display=""
    document.getElementById("image14").style.display=""
    document.getElementById("image15").style.display=""
    document.getElementById("image16").style.display=""
    document.getElementById("image17").style.display=""
    document.getElementById("image18").style.display=""
    document.getElementById("image19").style.display=""
    document.getElementById("image20").style.display=""
    document.getElementById("image21").style.display=""
    document.getElementById("image22").style.display=""
    document.getElementById("image23").style.display=""
    document.getElementById("image24").style.display=""
    document.getElementById("image25").style.display=""
    document.getElementById("image26").style.display=""
    document.getElementById("image27").style.display=""
}




function tour(){
    document.getElementById("image1").style.display=""
    document.getElementById("image2").style.display=""
    document.getElementById("image3").style.display=""
    document.getElementById("image4").style.display=""
    document.getElementById("image5").style.display=""
    document.getElementById("image6").style.display="none"
    document.getElementById("image7").style.display="none"
    document.getElementById("image8").style.display="none"
    document.getElementById("image9").style.display="none"
    document.getElementById("image10").style.display="none"
    document.getElementById("image11").style.display="none"
    document.getElementById("image12").style.display="none"
    document.getElementById("image13").style.display="none"
    document.getElementById("image14").style.display="none"
    document.getElementById("image15").style.display="none"
    document.getElementById("image16").style.display="none"
    document.getElementById("image17").style.display="none"
    document.getElementById("image18").style.display="none"
    document.getElementById("image19").style.display="none"
    document.getElementById("image20").style.display="none"
    document.getElementById("image21").style.display="none"
    document.getElementById("image22").style.display="none"
    document.getElementById("image23").style.display="none"
    document.getElementById("image24").style.display="none"
    document.getElementById("image25").style.display="none"
    document.getElementById("image26").style.display="none"
    document.getElementById("image27").style.display="none"
}







function events(){
    document.getElementById("image1").style.display="none"
    document.getElementById("image2").style.display="none"
    document.getElementById("image3").style.display="none"
    document.getElementById("image4").style.display="none"
    document.getElementById("image5").style.display="none"
    document.getElementById("image6").style.display="none"
    document.getElementById("image7").style.display="none"
    document.getElementById("image8").style.display="none"
    document.getElementById("image9").style.display="none"
    document.getElementById("image10").style.display="none"
    document.getElementById("image11").style.display="none"
    document.getElementById("image12").style.display="none"
    document.getElementById("image13").style.display=""
    document.getElementById("image14").style.display=""
    document.getElementById("image15").style.display=""
    document.getElementById("image16").style.display=""
    document.getElementById("image17").style.display=""
    document.getElementById("image18").style.display=""
    document.getElementById("image19").style.display=""
    document.getElementById("image20").style.display=""
    document.getElementById("image21").style.display=""
    document.getElementById("image22").style.display=""
    document.getElementById("image23").style.display=""
    document.getElementById("image24").style.display=""
    document.getElementById("image25").style.display=""
    document.getElementById("image26").style.display=""
    document.getElementById("image27").style.display=""
}



function institute(){
    document.getElementById("image1").style.display="none"
    document.getElementById("image2").style.display="none"
    document.getElementById("image3").style.display="none"
    document.getElementById("image4").style.display="none"
    document.getElementById("image5").style.display="none"
    document.getElementById("image6").style.display=""
    document.getElementById("image7").style.display=""
    document.getElementById("image8").style.display=""
    document.getElementById("image9").style.display=""
    document.getElementById("image10").style.display=""
    document.getElementById("image11").style.display=""
    document.getElementById("image12").style.display=""
    document.getElementById("image13").style.display="none"
    document.getElementById("image14").style.display="none"
    document.getElementById("image15").style.display="none"
    document.getElementById("image16").style.display="none"
    document.getElementById("image17").style.display="none"
    document.getElementById("image18").style.display="none"
    document.getElementById("image19").style.display="none"
    document.getElementById("image20").style.display="none"
    document.getElementById("image21").style.display="none"
    document.getElementById("image22").style.display="none"
    document.getElementById("image23").style.display="none"
    document.getElementById("image24").style.display="none"
    document.getElementById("image25").style.display="none"
    document.getElementById("image26").style.display="none"
    document.getElementById("image27").style.display="none"
}














var mainListDiv = document.getElementById("mainListDiv"),
    mediaButton = document.getElementById("mediaButton");

mediaButton.onclick = function () {
    
    "use strict";
    
    mainListDiv.classList.toggle("show_list");
    mediaButton.classList.toggle("active");
    
};