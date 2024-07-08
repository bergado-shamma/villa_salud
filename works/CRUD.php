<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/CRUD_styles.css">
    <title>Customization</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="./inventory.php">Inventory</a></li>
                <li><a href="../index.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <div class="sidebar">
        <div class="logo">
            <img src="../assets/logo.jpg" alt="Villa Salud Logo" />
        </div>
        <nav>
            <ul>
                <li>
                    <a href="#" class="dropdown-toggle">Patron (Client)</a>
                    <div class="dropdown-content">
                        <a href="#" data-target="addPatron">Create</a>
                        <a href="#" data-target="readData">Read</a>
                        <a href="#" data-target="updatePatron">Update</a>
                        <a href="#" data-target="deletePatron">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Reservation</a>
                    <div class="dropdown-content">
                        <a href="#" data-target="addReservation">Create</a>
                        <a href="#" data-target="readReservation">Read</a>
                        <a href="#" data-target="updateReservation">Update</a>
                        <a href="#" data-target="deleteReservation">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Event</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Venue</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Catering Package</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Villa Salud Representative</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Extra Service Options</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Payment Details</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Tax</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">Security Deposit</a>
                    <div class="dropdown-content">
                        <a href="#">Create</a>
                        <a href="#">Read</a>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
    <div id="addPatron" class="feature">
    <h2>Add Patron</h2>
    <form action="../database_connections/insert_patron.php" method="post">
        <label for="id">Patron ID:</label>
        <input type="text" id="id" name="id" required>
        <button type="button" onclick="generateRandomID()">Generate Random ID</button><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="telephone">Telephone:</label>
        <input type="text" id="telephone" name="telephone"><br><br>

        <label for="mobile">Mobile Phone Num.:</label>
        <input type="text" id="mobile" name="mobile"><br><br>

        <label for="signature">Signature:</label>
        <input type="text" id="signature" name="signature"><br><br>

        <input type="submit" value="Submit">
    </form>
</div>

<script>
    function generateRandomID() {
        const randomID = Math.floor(Math.random(100) * 1000) + 4;
        document.getElementById('id').value = randomID;
    }
</script>


        <div id="readData" class="feature">
            <h2>Read Data</h2>
            <form action="../database_connections/display_patron.php" method="post">
                <label for="search_name">Search by Name:</label>
                <input type="text" id="search_name" name="search_name">
                <button type="submit">Search</button>
            </form>
        </div>

        <div id="updatePatron" class="feature">
            <h2>Update Patron Information</h2>
            <form method="post" action="../database_connections/update_patron.php">
                Patron Name: <input type="text" name="update_name"><br><br>
                Email: <input type="text" name="update_email"><br><br>
                Address: <input type="text" name="update_address"><br><br>
                Telephone: <input type="text" name="update_telephone"><br><br>
                Mobile Phone Number: <input type="text" name="update_mobile"><br><br>
                Signature: <input type="text" name="update_signature"><br><br>
                <input type="submit" name="submit_update" value="Update">
            </form>
        </div>

        <div id="deletePatron" class="feature">
            <h2>Delete Patron Information</h2>
            <form method="post" action="../database_connections/delete_patron.php">
                Patron Name: <input type="text" name="delete_name"><br><br>
                <input type="submit" name="submit_delete" value="Delete">
            </form>
        </div>

        <div id="addReservation" class="feature">
            <h2>Add Reservation</h2>
            <form action="../database_connections/crud_reservation.php" method="post">
                <label for="reservation_id">Reservation ID:</label>
                <input type="text" id="reservation_id" name="reservation_id" required><br><br>

                <label for="date_of_booking">Date of Booking:</label>
                <input type="date" id="date_of_booking" name="date_of_booking" required><br><br>

                <label for="catering_services">Catering Services:</label>
                <input type="text" id="catering_services" name="catering_services" required><br><br>

                <label for="reservation_fee">Reservation Fee:</label>
                <input type="text" id="reservation_fee" name="reservation_fee" required><br><br>

                <label for="terms_of_payments">Terms of Payments:</label>
                <input type="text" id="terms_of_payments" name="terms_of_payments" required><br><br>

                <label for="cancellation_charges">Cancellation Charges:</label>
                <input type="text" id="cancellation_charges" name="cancellation_charges" required><br><br>

                <label for="number_of_pax">Number of Pax:</label>
                <input type="text" id="number_of_pax" name="number_of_pax" required><br><br>

                <label for="motif">Motif:</label>
                <input type="text" id="motif" name="motif" required><br><br>

                <input type="submit" value="Submit">
            </form>
        </div>

        <div id="readReservation" class="feature">
            <h2>Read Reservation</h2>
            <form action="../database_connections/crud_reservation.php" method="post">
                <label for="search_id">Search by Reservation ID:</label>
                <input type="text" id="search_id" name="search_id">
                <button type="submit">Search</button>
            </form>
        </div>

        <div id="updateReservation" class="feature">
            <h2>Update Reservation Information</h2>
            <form action="../database_connections/crud_reservation.php" method="post">
                <label for="update_id">Reservation ID to Update:</label>
                <input type="text" id="update_id" name="update_id" required><br><br>

                <label for="new_motif">New Motif:</label>
                <input type="text" id="new_motif" name="new_motif" required><br><br>
                <input type="submit" name="submit_update" value="Update">
            </form>
        </div>


        <div id="deleteReservation" class="feature">
            <h2>Delete Reservation Information</h2>
            <form action="../database_connections/crud_reservation.php" method="post">
                <label for="delete_id">Reservation ID to Delete:</label>
                <input type="text" id="delete_id" name="delete_id" required><br><br>
                <input type="submit" name="submit_delete" value="Delete">
            </form>
        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../scripts/CRUD_script.js"></script>
    <script src="../scripts/sidebar.js"></script>
</body>

</html>