<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Villa Salud - Portfolio</title>
  <link rel="stylesheet" href="../styles/log_in_styles.css" />
</head>

<body>
  <header>
    <div class="logo">
      <img src="../assets/logo.jpg" alt="Villa Salud Logo" />
    </div>
    <nav>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../works/about_us.php">About Us</a></li>
        <li><a href="../works/packages.php">Packages</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section>
      <div class="login">
      </div>
      <div class="login-container">
        <h2>Login</h2>
        <form action="/submit-login" method="post">
          <label id="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Username" required />
          <label id="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required />
          <button type="submit" class="log-in" value="Login">Log In</button>
        </form>
        <p>
          Don't have an account?
          <a href="../works/sign_up.php">Sign Up</a>
        </p>
      </div>
    </section>
  </main>

  <script src="scripts.js"></script>
</body>

</html>