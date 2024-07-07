document.addEventListener("DOMContentLoaded", function () {
  const toggleButtons = document.querySelectorAll(".toggle-btn");
  const setButtons = document.querySelectorAll(".set-btn");

  toggleButtons.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();

      const packageInfo = this.nextElementSibling;
      packageInfo.classList.toggle("visible");

      if (packageInfo.classList.contains("visible")) {
        this.textContent = "Hide package information";
      } else {
        this.textContent = "See package information";
      }
    });
  });

  setButtons.forEach((setButton) => {
    setButton.addEventListener("click", function () {
      const setNumber = this.getAttribute("data-set");
      const packageInfo = this.parentElement;
      const setInfo = packageInfo.querySelector(
        `.set-info[data-set="${setNumber}"]`
      );

      if (setInfo) {
        setInfo.classList.toggle("visible");

        if (setInfo.classList.contains("visible")) {
          this.textContent = `Hide Set ${setNumber}`;
        } else {
          this.textContent = `Set ${setNumber}`;
        }
      }
    });
  });
});
