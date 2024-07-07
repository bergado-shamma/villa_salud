<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sanitize($conn, $input)
{
    return $conn->real_escape_string(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["submit_add"])) {
        $name = sanitize($conn, $_POST['name']);
        $date_of_booking = sanitize($conn, $_POST['date_of_booking']);
        $venue_name = sanitize($conn, $_POST['venue_name']);
        $venue_rental = sanitize($conn, $_POST['venue_rental']);
        $catering_services = sanitize($conn, $_POST['catering_services']);
        $reservation_fee = sanitize($conn, $_POST['reservation_fee']);
        $terms_of_payments = sanitize($conn, $_POST['terms_of_payments']);
        $cancellation_charges = sanitize($conn, $_POST['cancellation_charges']);
        $event = sanitize($conn, $_POST['event']);
        $time = sanitize($conn, $_POST['time']);
        $emcee = sanitize($conn, $_POST['emcee']);
        $clown = sanitize($conn, $_POST['clown']);
        $room = sanitize($conn, $_POST['room']);
        $check_in_time = sanitize($conn, $_POST['check_in_time']);
        $check_out_time = sanitize($conn, $_POST['check_out_time']);
        $accompanying_escort = sanitize($conn, $_POST['accompanying_escort']);
        $number_of_pax = sanitize($conn, $_POST['number_of_pax']);
        $motif = sanitize($conn, $_POST['motif']);
        $lechon = sanitize($conn, $_POST['lechon']);
        $bridal_car = sanitize($conn, $_POST['bridal_car']);
        $van = sanitize($conn, $_POST['van']);
        $photo_booth = sanitize($conn, $_POST['photo_booth']);
        $mobile_bar = sanitize($conn, $_POST['mobile_bar']);
        $flower_entourage = sanitize($conn, $_POST['flower_entourage']);

        $sql = "INSERT INTO reservations (name, date_of_booking, venue_name, venue_rental, catering_services, reservation_fee, terms_of_payments, cancellation_charges, event, time, emcee, clown, room, check_in_time, check_out_time, accompanying_escort, number_of_pax, motif, lechon, bridal_car, van, photo_booth, mobile_bar, flower_entourage) 
                VALUES ('$name', '$date_of_booking', '$venue_name', '$venue_rental', '$catering_services', '$reservation_fee', '$terms_of_payments', '$cancellation_charges', '$event', '$time', '$emcee', '$clown', '$room', '$check_in_time', '$check_out_time', '$accompanying_escort', '$number_of_pax', '$motif', '$lechon', '$bridal_car', '$van', '$photo_booth', '$mobile_bar', '$flower_entourage')";

        if ($conn->query($sql) === TRUE) {
            echo "New reservation added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["submit_update"])) {
        $update_name = sanitize($conn, $_POST['update_name']);
        $date_of_booking = sanitize($conn, $_POST['update_date_of_booking']);
        $venue_name = sanitize($conn, $_POST['update_venue_name']);
        $venue_rental = sanitize($conn, $_POST['update_venue_rental']);
        $catering_services = sanitize($conn, $_POST['update_catering_services']);
        $reservation_fee = sanitize($conn, $_POST['update_reservation_fee']);
        $terms_of_payments = sanitize($conn, $_POST['update_terms_of_payments']);
        $cancellation_charges = sanitize($conn, $_POST['update_cancellation_charges']);
        $event = sanitize($conn, $_POST['update_event']);
        $time = sanitize($conn, $_POST['update_time']);
        $emcee = sanitize($conn, $_POST['update_emcee']);
        $clown = sanitize($conn, $_POST['update_clown']);
        $room = sanitize($conn, $_POST['update_room']);
        $check_in_time = sanitize($conn, $_POST['update_check_in_time']);
        $check_out_time = sanitize($conn, $_POST['update_check_out_time']);
        $accompanying_escort = sanitize($conn, $_POST['update_accompanying_escort']);
        $number_of_pax = sanitize($conn, $_POST['update_number_of_pax']);
        $motif = sanitize($conn, $_POST['update_motif']);
        $lechon = sanitize($conn, $_POST['update_lechon']);
        $bridal_car = sanitize($conn, $_POST['update_bridal_car']);
        $van = sanitize($conn, $_POST['update_van']);
        $photo_booth = sanitize($conn, $_POST['update_photo_booth']);
        $mobile_bar = sanitize($conn, $_POST['update_mobile_bar']);
        $flower_entourage = sanitize($conn, $_POST['update_flower_entourage']);

        $sql = "UPDATE reservations 
                SET date_of_booking='$date_of_booking', venue_name='$venue_name', venue_rental='$venue_rental', catering_services='$catering_services', reservation_fee='$reservation_fee', terms_of_payments='$terms_of_payments', cancellation_charges='$cancellation_charges', event='$event', time='$time', emcee='$emcee', clown='$clown', room='$room', check_in_time='$check_in_time', check_out_time='$check_out_time', accompanying_escort='$accompanying_escort', number_of_pax='$number_of_pax', motif='$motif', lechon='$lechon', bridal_car='$bridal_car', van='$van', photo_booth='$photo_booth', mobile_bar='$mobile_bar', flower_entourage='$flower_entourage' 
                WHERE name='$update_name'";

        if ($conn->query($sql) === TRUE) {
            echo "Reservation updated successfully";
        } else {
            echo "Error updating reservation: " . $conn->error;
        }
    } elseif (isset($_POST["submit_delete"])) {
        $delete_name = sanitize($conn, $_POST['delete_name']);

        $sql = "DELETE FROM reservations WHERE name='$delete_name'";

        if ($conn->query($sql) === TRUE) {
            echo "Reservation deleted successfully";
        } else {
            echo "Error deleting reservation: " . $conn->error;
        }
    } elseif (isset($_POST["submit_search"])) {
        $search_name = sanitize($conn, $_POST['search_name']);

        $sql = "SELECT * FROM reservations WHERE name LIKE '%$search_name%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            }
        } else {
            echo "0 results";
        }
    }
}

$conn->close();
?>