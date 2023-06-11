<!DOCTYPE html>
<html>
  <head>
    <title>SOOLSOOLFOORI</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="assets/css/noscript.css"
    /></noscript>
  </head>
  <body class="is-preload">
    <!-- Header -->
    <header id="header">
      <?php include "header.php";?>
    </header>
    <!-- Contact -->
    <section id="contact" class="main style5 fullscreen">
      <div class="content c-half">
        <header>
          <h2>SIGN UP</h2>
          <p>If you want to enjoy the benefits we have prepared for you, 
            <br>Please Sign up.</p>
        </header>
        <div class="box">
          <form method="post" action="signup_check.php">
            <div class="fields">
              <div class="field">
                <input type="text" name="name" placeholder="Nickname" />
              </div>
              <div class="field">
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div class="field">
                <input type="password" name="password" placeholder="Password" />
              </div>
              <div class="field">
                <input type="password" name="password_check" placeholder="Rewrite Password" />
              </div>
            </div>
            <ul class="actions special">
              <li><input type="submit" value="Sign Up" /></li>
              <li><input type="button" value="Cancel" 
                onClick="history.go(-1)"/></li>
            </ul>
          </form>
        </div>
      </div>
    </section>

            <!-- Footer -->
    <footer id="footer" class="full-footer">
      <?php include "footer.php";?>
    </footer>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
