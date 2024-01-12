function openForm() {
  document.getElementById("myForm").style.width = "100%";
}

function closeForm() {
  document.getElementById("myForm").style.width = "0%";
}
// dynamically setting the height of the placeholder to match the height of the .absolute-container.
window.onload = () => {
  const absoluteContainer = document.querySelector(".absolute-container");
  const placeholder = document.querySelector(".absolute-container-placeholder");

  placeholder.style.height = window.getComputedStyle(absoluteContainer).height;

  const map = document.querySelector(".map");
  const pointer = document.querySelector(".pointer");

  // Calculate the position of the pointer based on the size of the map
  const top = map.offsetHeight * 0.605;
  const left = map.offsetWidth * 0.293;
  const width = map.offsetWidth * 0.089;
  const height = map.offsetHeight * 0.089;

  // Update the position of the pointer
  pointer.style.top = `${top}px`;
  pointer.style.left = `${left}px`;
  pointer.style.width = `${width}px`;
  pointer.style.height = `${height}px`;
};

window.onresize = () => {
  const absoluteContainer = document.querySelector(".absolute-container");
  const placeholder = document.querySelector(".absolute-container-placeholder");

  placeholder.style.height = window.getComputedStyle(absoluteContainer).height;

  // Add your new functionality here
  const map = document.querySelector(".map");
  const pointer = document.querySelector(".pointer");

  // Calculate the position of the pointer based on the size of the map
  const top = map.offsetHeight * 0.605;
  const left = map.offsetWidth * 0.293;
  const width = map.offsetWidth * 0.089;
  const height = map.offsetHeight * 0.089;

  // Update the position of the pointer
  pointer.style.top = `${top}px`;
  pointer.style.left = `${left}px`;
  pointer.style.width = `${width}px`;
  pointer.style.height = `${height}px`;
};
