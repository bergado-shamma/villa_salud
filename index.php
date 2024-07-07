<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Villa Salud</title>
    <link rel="stylesheet" href="./styles/index_styles.css" />
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="./assets/logo.jpg" alt="Villa Salud Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="./works/log_in.php">Log In</a></li>
          <li><a href="./works/about_us.php">About Us</a></li>
          <li><a href="./works/packages.php">Packages</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section class="tagline">
        <div class="tagline-text">
          <h1>Filling every occasion with great food and service</h1>
          <a href="#" class="btn">Learn more about us</a>
        </div>
      </section>

      <section class="services">
        <div class="service">
          <img src="./assets/event_picture.jpg" alt="Event Organizing" />
          <h2>Event Organizing</h2>
          <p>
            We offer event organizing! Memorable events don’t just happen. They
            happen to be our business.
          </p>
          <a href="./works/packages.php" class="btn" id="event-btn">See more</a>
        </div>
        <div class="service">
          <img src="./assets/food_picture.jpg" alt="Catering" />
          <h2>Catering</h2>
          <p>
            Villa Salud at your service, from classic comfort to exotic
            delights, we cater all!
          </p>
          <a href="./works/packages.php" class="btn" id="catering-btn"
            >See more</a
          >
        </div>
        <div class="service">
          <img src="./assets/pool_picture1.jpg" alt="Pool Renting" />
          <h2>Pool Renting</h2>
          <p>When life’s got you down, just keep swimming.</p>
          <a href="./works/packages.php" class="btn" id="pool-btn">See more</a>
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
