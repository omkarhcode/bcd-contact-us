// Get the button
const mybutton = document.getElementById("scrollToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = () => {
  scrollFunction();
};

function scrollFunction() {
  // mybutton.style.display =
  //   document.body.scrollTop > 120 || document.documentElement.scrollTop > 120
  //     ? "block"
  //     : "none";

  if (
    document.body.scrollTop > 120 ||
    document.documentElement.scrollTop > 120
  ) {
    mybutton.classList.add("show");
    // mybutton.style.display = "block";
  } else {
    mybutton.classList.remove("show");
    // mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
