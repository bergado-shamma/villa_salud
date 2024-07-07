<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="../styles/sign_up_styles.css"
    />
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="../assets/logo.jpg" alt="Villa Salud Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="./about_us.php">About Us</a></li>
          <li><a href="./packages.php">Packages</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <div class="signup-container">
          <form action="../database_connections/sign_up_db_connection.php" method="POST" class="signup-form">
            <h2>Sign Up</h2>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" required />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" required />
            </div>
            <div class="form-group">
              <button type="submit" class="sign_up" id="sign_up">Sign Up</button>
            </div>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>
