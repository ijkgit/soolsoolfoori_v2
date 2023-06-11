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
  
    <!-- review main-->
    <section id="review-main" class="main style7 dark fullscreen">
      <div class="image">  
        <img src="./images/review/seoulnight/one.jpg">
      </div>
      <div class="main style1 dark fullscreen content">   
        <h2>SEOUL NIGHT</h2></br>
        <p> The Han, which makes real plum wine, is located in Eunpyeong-gu, Seoul. When you think of a traditional liquor brewery, you tend to think of a geographically lower area with clean water and good air. This is related to plums, which are the main raw material for alcohol, because they are directly produced in a 2,000-pyeong family orchard located in Bangi-dong, Songpa-gu.
        </p>
        <footer>
          <a href="#one" class="button style3">Most View</a>
          <a href="#two" class="button style3">Recent Post</a>
          <a href="#contact" class="button style3">Add Review</a>
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
  $category = 'seoulnight';
	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
	$sql = "select * from board where category='$category' order by hit desc";
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
	$sql = "select * from board where category='$category' order by num desc";
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
      <a href="#contact" class="button style2 down anchored">Next</a>
</section>

    <!-- modify -->
    <section id="contact" class="main style3 secondary">
      <div class="content">
        <header>
          <h2>Add New Review</h2>
          <p>You can share your thoughts with people by writing a new review.
          <br/>The title, photo, and content must be included.
        </header>
        <div class="box">
          <form method="post" action="board_insert.php" enctype="multipart/form-data">
            <div class="fields">
              <div class="field">
                <input type="text" name="title" placeholder="Title" />
              </div>
              <div class="field quarterhalf">
                
                <input type="text" id="fileName" class="file_input_textbox" readonly >
	<div class="file_input_div">
		<img src="./images/open.png" class="file_input_img_btn" alt="open" />
		<input type="file" name="upfile" class="file_input_hidden"
    accept = ".jpg, .png" 
    onchange="javascript: document.getElementById('fileName').value = this.value;"/>
	</div>
  <input type="hidden" name="category" value="<?=$category?>">
              </div>
              <div class="field">
                <textarea
                  name="content"
                  placeholder="Content"
                  rows="6"
                ></textarea>
              </div>
            </div>
            <ul class="actions special">
              <li><input type="submit" value="Add" /></li>
              <li><input type="button" value="Cancel" 
                onClick="#"/></li>
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
    <!-- <script src="assets/js/login_modal.js"></script>
    <script src="assets/js/modal.js"></script> -->
  </body>
</html>
