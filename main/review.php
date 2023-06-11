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
    
    
    <!-- One -->
    <section id="one" class="main style6 dark fullscreen flex-wrap">
      <div class="content-buy">
        <header>
          <h2><yellow>
            REVIEW
          </yellow></h2>
        </header>
      </div>
        <!-- Data -->
       <?php
       $category = 'wonsoju';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];

       ?>
      
      <div class="flex">
        <div class="box-buy" onclick="location.href='./wonsoju.php'">
          <span class="image desc-image item">
            <img src="./images/review/1.png">
          </span>
          <span class="acc-info">
            <h3>Wonsoju</h3>
          </span>
          <span class="acc-desc">
            traditional distilled soju
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>
       
        <!-- Data -->
       <?php
       $category = 'seoulnight';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];
       ?>

        <div class="box-buy" onclick="location.href='./seoulnight.php'">
          <span class="image desc-image item">
            <img src="./images/review/2.png">
          </span>
          <span class="acc-info">
            <h3>Seoul Night 2023</h3>
          </span>
          <span class="acc-desc">
          Plum wine made from yellow plums
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>
        
        <!-- Data -->
       <?php
       $category = 'daedaepo';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];
       ?>

        <div class="box-buy" onclick="location.href='./daedaepo.php'">
          <span class="image desc-image item">
            <img src="./images/review/3.png">
          </span>
          <span class="acc-info">
            <h3>Daedaepo Blue</h3>
          </span>
          <span class="acc-desc">
            traditional damyang makgeoli
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>
        
        <!-- Data -->
       <?php
       $category = 'taoyuan';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];
       ?>

        <div class="box-buy" onclick="location.href='./taoyuan.php'">
          <span class="image desc-image item">
            <img src="./images/review/4.png">
          </span>
          <span class="acc-info">
            <h3>Taoyuan Resolution</h3>
          </span>
          <span class="acc-desc">
          Distilled liquor made from peaches
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>
    </div>
      <a href="#two" class="button style2 down anchored">Next</a>
    </section>
    <!-- Two -->
    <section id="two" class="main style6 dark fullscreen flex-wrap">
      <div class="content-buy">
        <header>
          <h2><yellow>
            REVIEW
          </yellow></h2>
        </header>
      </div>

      <!-- Data -->
      <?php
       $category = 'ilpoom';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];
       ?>

      <!-- ilpoom -->
      <div class="flex">
      <div class="box-buy" onclick="location.href='./ilpoom.php'">
          <span class="image desc-image item">
            <img src="./images/review/5.png">
          </span>
          <span class="acc-info">
            <h3>Ilpoom Soju</h3>
          </span>
          <span class="acc-desc">
          Premium Soju 
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>
       
      <!-- Data -->
      <?php
       $category = 'tokki';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];
       ?>

      <!-- tokki -->
      <div class="box-buy" onclick="location.href='./tokki.php'">
          <span class="image desc-image item">
            <img src="./images/review/6.png">
          </span>
          <span class="acc-info">
            <h3>Tokki Soju</h3>
          </span>
          <span class="acc-desc">
          The first soju created in the United States
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>
        
              <!-- Data -->
      <?php
       $category = 'sulsaem';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];
       ?>

      <!-- sulsaem -->
      <div class="box-buy" onclick="location.href='./sulsaem.php'">
          <span class="image desc-image item">
            <img src="./images/review/7.png">
          </span>
          <span class="acc-info">
            <h3>Sulsaem 16</h3>
          </span>
          <span class="acc-desc">
          Exciting drink, exhilarating fountain
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>

              <!-- Data -->
      <?php
       $category = 'omegi';
      	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
      	$sql = "select SUM(hit) as sum, SUM(likeNum) as sum2 from board where category='$category'";
      	$result = mysqli_query($con, $sql);
      	$total_record = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
       $sum_hit = $row['sum'];
       $sum_like = $row['sum2'];
       ?>

      <!-- ilpoom -->
      <div class="box-buy" onclick="location.href='./omegi.php'">
          <span class="image desc-image item">
            <img src="./images/review/8.png">
          </span>
          <span class="acc-info">
            <h3>Omegi</h3>
          </span>
          <span class="acc-desc">
          Made with ingredients from Jeju Island
          </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$sum_hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$sum_like?>
          </span>
          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
        </div>
    </div>
      <!-- <a href="#two" class="button style2 down anchored">Next</a> -->
    </section>

           <!-- Footer -->
    <footer id="footer">
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
