<!DOCTYPE html>
<html>
<head>
  <title> Log in </title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>

  <header>
    <img src="assets/images/logo.png" alt="AA logo" id="logo"/>
    <a href="signup.php"><button class="header-btn" type="button">Sign up</button></a>
  </header>

  <div id="content">
    <div id="main_content">
      <h1>Log in to Your Account</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ante lacus, lacinia quis tempor vitae, suscipit eu turpis. Nunc sit amet ultricies massa, commodo tempor dui. Vivamus non eros et leo commodo consectetur eu suscipit velit. Proin consectetur elit a auctor gravida. Ut nec velit dignissim, mattis enim quis, fringilla ligula. Aliquam libero nisl, sollicitudin ac lacus vitae, consectetur iaculis nulla. In hac habitasse platea dictumst. Aenean sollicitudin tempor ullamcorper. Nam quis arcu nisl. Curabitur quis lacus viverra, faucibus sapien id, egestas lorem. Sed porttitor nisl dictum, dictum turpis vel, elementum odio. Nullam sit amet neque ut nulla convallis convallis. Maecenas vestibulum eros ac velit convallis, a vestibulum ipsum consequat.</p>

      <form action="" method="get"> <!-- insert php file wk5 -->
        Email:<br>
        <input type="text" name="email" class="form_input"><br>
        Password:<br>
        <input type="text" name="password" class="form_input"><br>
        <a href="home.php"><button class="main-btn" type="button">Log in</button></a>
      </form>
    </div>
  </div>

  <footer>
    <section class="border-right">
      <h4>Stay Tuned</h4>
      <p>Connect with us on Twitter to see the latest news and updates.</p>
      <a href="https://twitter.com/AnonAspirer?lang=en"><img src="assets/icons/twitter_icon.png" /></a>
    </section>

    <section class="border-right">
      <h4>Email Updates</h4>
      <p>Enter in your email to receive our offers and announcements.</p>
      <input type="text" />
      <a href=""><img src="assets/icons/email_icon.png"></a>
    </section>

    <section>
      <h4>Contact Us</h4>
      <p>Have any questions? Send us an email and we'll get back to you as soon as possible. </p>
      <a href=""><button id="footer-btn" type="button">Email Us</button></a>
    </section>

    <p id="copyright"> Copyright &copy; The Anonymous Aspirer, 2015. </p>
  </footer>

</body>
</html>
