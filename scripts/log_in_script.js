document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".form");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const usernameInput = document.getElementById("username").value.trim().toUpperCase();

        if (usernameInput.startsWith("ADMN")) {
            window.location = "../works/admin_dashboard.php";
        } else if (usernameInput.startsWith("REP")) {
            window.location = "../works/representative_dashboard.php";
        } else {
            alert("Invalid input. Please enter a valid Special Key.");
        }
    });
});
