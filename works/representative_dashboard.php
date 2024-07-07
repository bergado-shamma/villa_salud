<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Representative Dashboard</title>
    <link rel="stylesheet" href="../styles/representative_dashboard_styles.css" />
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="../assets/logo.jpg" alt="Villa Salud Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="./inventory.php">Inventory</a></li>
          <li><a href="../index.php">Log Out</a></li>
        </ul>
      </nav>
    </header>

    <main>
    <h1 class="text">Welcome to Representative Dashboard!</h1>
      <section class="services">
        <div class="service">
          <img src="../assets/custom.png" alt="Customization" />
          <h2>Reservations</h2>
          <a href="./CRUD.php" class="btn" id="event-btn">Add reservation now</a>
        </div>
        <div class="service">
          <img src="../assets/inbox.png" alt="Inbox" />
          <h2>Inbox</h2>
          <a href="./inbox.php" class="btn" id="inbox-btn"
            >See inbox</a
          >
        </div>
        <div class="service">
          <img src="../assets/report.png" alt="Reports" />
          <h2>Reports</h2>
          <a href="./works/report.php" class="btn" id="submit-btn">Submit reports</a>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer-content">
        <p>&copy; 2024 Villa Salud. All rights reserved.</p>
      </div>
    </footer>

    <script src="./scripts/index_script.js"></script>
  </body>
</html>
