document.getElementById("contact-form").addEventListener("submit", (event) => {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const mobile = document.getElementById("mobile").value;
  const project = document.getElementById("project").value;

  const formData = new FormData();
  formData.append("name", name);
  formData.append("email", email);
  formData.append("mobile", mobile);
  formData.append("project", project);

  fetch("includes/formhandler.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data);

      // Clear the form
      event.target.reset();

      // Manually resetting the custom select
      const customSelect = document.querySelector(".custom-select");
      const originalSelect = customSelect.getElementsByTagName("select")[0];
      const selectedDiv =
        customSelect.getElementsByClassName("select-selected")[0];
      originalSelect.selectedIndex = 0; // Reset the original select element
      selectedDiv.innerHTML = originalSelect.options[0].innerHTML; // Reset the custom select

      alert("Thank you for contacting us. We will get back to you soon.");
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});
