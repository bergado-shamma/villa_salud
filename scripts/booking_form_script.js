const bookingForm = document.getElementById("bookingForm");

bookingForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const bookingSuccessful = true;

  if (bookingSuccessful) {
    Swal.fire({
      icon: "success",
      title: "Booking Successful!",
      text: "Your booking has been successfully submitted.",
      confirmButtonText: "OK",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "../index.php";
      }
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Booking Failed",
      text: "There was an error processing your booking. Please try again later.",
      confirmButtonText: "OK",
    });
  }
});
