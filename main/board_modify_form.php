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

<!-- data -->
<?php
	$num  = $_GET["num"];
	
	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name       = $row["name"];
	$title    = $row["title"];
	$content    = $row["content"];		
	$file_name  = $row["file_name"];
	$category = $row["category"];
?>

<!-- modify -->
<section id="contact" class="main style3 secondary">
      <div class="content">
		
        <header>
          <h2>Modify</h2>
          <p>You can share your thoughts with people by writing a new review.
          <br/>The title, photo, and content must be included.
        </header>
        <div class="box">
          <form method="post" action="board_modify.php?num=<?=$num?>" enctype="multipart/form-data">
            <div class="fields">
              <div class="field">
                <input type="text" name="title" value="<?=$title?>" />
              </div>
              <div class="field quarterhalf">
                
                <input type="text" id="fileName" class="file_input_textbox" value="<?=$file_name?>" readonly >
	<div class="file_input_div">
		<img src="./images/open.png" class="file_input_img_btn" alt="open" />
		<input type="file" name="upfile" class="file_input_hidden"
    accept = ".jpg, .png" 
    onchange="javascript: document.getElementById('fileName').value = this.value;"/>
	</div>
  <input type="hidden" name="category" value="<?=$category?>">
              </div>
              <div class="field">
                <textarea name="content"
				>
			<?=$content?>
			</textarea>
              </div>
            </div>
            <ul class="actions special">
              <li><input type="submit" value="Modify" /></li>
              <li><input type="button" value="Cancel"
                onClick="history.go(-1)"/></li>
            </ul>
          </form>
        </div>
      </div>
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

