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
    <?php
  if (isset($_SESSION["user_id"])) $user_session = $_SESSION["user_id"];
  else $user_session = "";
  if (isset($_SESSION["user_name"])) $name_session = $_SESSION["user_name"];
  else $name_session = "";
  ?>
    <!-- review main-->
    <section id="review-main" class="main style7 dark fullscreen">
      <div class="main style1 dark fullscreen content">   
        <h2 style="color:yellow !important; background:purple !important;"><?=$name_session?></h2></br>
        <p> Welcome <?=$name_session?>!</br>
Lead the future of traditionalism with us!</br>
Click the button below to see which of your posts have been viewed by many people, <br/>as well as your most recent posts and most commented posts.
        </p>
        <footer>
          <a href="#one" class="button style3">Most View</a>
          <a href="#two" class="button style3">Recent Post</a>
          <a href="#three" class="button style3">Most Commented</a>
        </footer>       
      </div>
    </section>

    <!-- most view server -->
    

    <!-- review board -->
    <section id="one" class="main style8 dark fullscreen flex-wrap">
      <div class="content-review">
        <header>
          <h2><yellow>
            MOST VIEWED POST
          </yellow></h2>
        </header>
      </div>
      <div class="flex-review">
      <?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;
  $category = 'tokki';
	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
	$sql = "select * from board where email='$user_session' order by hit desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 4;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = 0;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["num"];
	  $email          = $row["email"];
	  $name        = $row["name"];
	  $title     = $row["title"];
    $content = $row["content"];
    $file_name = $row["file_name"];
    $file_copied  = $row["file_copied"];
    $real_name = $file_copied;
    $file_path = "./data/".$real_name;
      $regist_day  = $row["regist_day"];
      $hit         = $row["hit"];
      $likeNum = $row["likeNum"];
?>
        <div class="box-buy" onclick="location.href='post.php?num=<?=$num?>'">
          <span class="image desc-image item">
            <img src="<?=$file_path?>">
          </span>
          <span class="acc-info">
            <h3><?=$title?></h3>
          </span>
          <span class="acc-price">
            <h3><?=$name?></h3>
          </span>
          <span class="acc-desc">
          <?=$content?></br>
   </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$likeNum?>
          </span>

          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
          </div>
          <?php
   	   $number--;
   }
   mysqli_close($con);

?>
      <a href="#two" class="button style2 down anchored">Next</a>
</section>

    <!-- review board two -->
    <!-- review board -->
    <section id="two" class="main style8 dark fullscreen flex-wrap">
      <div class="content-review">
        <header>
          <h2><yellow>
            RECENT POST
          </yellow></h2>
        </header>
      </div>
      <div class="flex-review">
      <?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
	$sql = "select * from board where email='$user_session' order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 4;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = 0;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["num"];
	  $email          = $row["email"];
	  $name        = $row["name"];
	  $title     = $row["title"];
    $content = $row["content"];
    $file_name = $row["file_name"];
    $file_copied  = $row["file_copied"];
    $real_name = $file_copied;
    $file_path = "./data/".$real_name;
      $regist_day  = $row["regist_day"];
      $hit         = $row["hit"];
      $likeNum = $row["likeNum"];
?>
        <div class="box-buy" onclick="location.href='post.php?num=<?=$num?>'">
          <span class="image desc-image item">
            <img src="<?=$file_path?>">
          </span>
          <span class="acc-info">
            <h3><?=$title?></h3>
          </span>
          <span class="acc-price">
            <h3><?=$name?></h3>
          </span>
          <span class="acc-desc">
          <?=$content?></br>
   </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$likeNum?>
          </span>

          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
          </div>
          <?php
   	   $number--;
   }
   mysqli_close($con);

?>
      <a href="#three" class="button style2 down anchored">Next</a>
</section>

</section>

    <!-- review board two -->
    <!-- review board -->
    <section id="three" class="main style8 dark fullscreen flex-wrap">
      <div class="content-review">
        <header>
          <h2><yellow>
            MOST COMMENTED POST
          </yellow></h2>
        </header>
      </div>
      <div class="flex-review">
      <?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
	$sql = "select * from board where email='$user_session' order by likeNum desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 4;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = 0;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["num"];
	  $email          = $row["email"];
	  $name        = $row["name"];
	  $title     = $row["title"];
    $content = $row["content"];
    $file_name = $row["file_name"];
    $file_copied  = $row["file_copied"];
    $real_name = $file_copied;
    $file_path = "./data/".$real_name;
      $regist_day  = $row["regist_day"];
      $hit         = $row["hit"];
      $likeNum = $row["likeNum"];
?>
        <div class="box-buy" onclick="location.href='post.php?num=<?=$num?>'">
          <span class="image desc-image item">
            <img src="<?=$file_path?>">
          </span>
          <span class="acc-info">
            <h3><?=$title?></h3>
          </span>
          <span class="acc-price">
            <h3><?=$name?></h3>
          </span>
          <span class="acc-desc">
          <?=$content?></br>
   </span>
          <span class="acc-hit">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$hit?> &nbsp; &nbsp;
          <i class="fas fa-heart"></i> : <?=$likeNum?>
          </span>

          <span class="acc-button">
            <input type="button" value="REVIEW NOW">
            </span>
          </div>
          <?php
   	   $number--;
   }
   mysqli_close($con);

?>
   
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
    <!-- <script src="assets/js/login_modal.js"></script>
    <script src="assets/js/modal.js"></script> -->
  </body>
</html>
