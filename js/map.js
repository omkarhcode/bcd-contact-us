function openForm() {
  document.getElementById("myForm").style.width = "100%";
}

function closeForm() {
  document.getElementById("myForm").style.width = "0%";
}
// dynamically setting the height of the placeholder to match the height of the .absolute-container.
window.onload = function () {
  var absoluteContainer = document.querySelector(".absolute-container");
  var placeholder = document.querySelector(".absolute-container-placeholder");

  placeholder.style.height = window.getComputedStyle(absoluteContainer).height;

  var map = document.querySelector(".map");
  var pointer = document.querySelector(".pointer");

  // Calculate the position of the pointer based on the size of the map
  var top = map.offsetHeight * 0.605;
  var left = map.offsetWidth * 0.293;
  var width = map.offsetWidth * 0.09;
  var height = map.offsetHeight * 0.09;

  // Update the position of the pointer
  pointer.style.top = top + "px";
  pointer.style.left = left + "px";
  pointer.style.width = width + "px";
  pointer.style.height = height + "px";
};

window.onresize = function () {
  var absoluteContainer = document.querySelector(".absolute-container");
  var placeholder = document.querySelector(".absolute-container-placeholder");

  placeholder.style.height = window.getComputedStyle(absoluteContainer).height;

  // Add your new functionality here
  var map = document.querySelector(".map");
  var pointer = document.querySelector(".pointer");

  // Calculate the position of the pointer based on the size of the map
  var top = map.offsetHeight * 0.605;
  var left = map.offsetWidth * 0.293;
  var width = map.offsetWidth * 0.09;
  var height = map.offsetHeight * 0.09;

  // Update the position of the pointer
  pointer.style.top = top + "px";
  pointer.style.left = left + "px";
  pointer.style.width = width + "px";
  pointer.style.height = height + "px";
};
