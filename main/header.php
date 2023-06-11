<?php
    session_start();
    if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];
    else $user_id = "";
    if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
    else $user_name = "";
?>
<h1><a href="./index.php">SOOLSOOLFOORI</a></h1>
    <nav>
        <ul>
          <li><a href="./review.php">Review</a></li>
          <li><a href="./index.php#contact">Contact</a></li>
        </ul>
        <?php
            if(!$user_id) {
        ?>
        <ul class="ul_style2">
          <li><a href="./login_form.php">Login</a></li>
          <li><a href="./signup_form.php">Sign Up</a></li>
        </ul>
        <?php
            }
            else {
        ?>
        <ul class="ul_style2">
          <li><a href="./mypage.php">Mypage</a></li>
          <li><a href="./logout.php">Logout</a></li>
        </ul>
        <?php
            }
        ?>
      </nav>