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

  <?php
  // session_start();
  
  // else $user_session = "";
  // if (isset($_SESSION["user_name"])) 
  //session_start();
  // $name_session = $_SESSION["user_name"];
  // else $name_session = "";
  ?>
  
  <body class="is-preload">
    <!-- Header -->
    <header id="header">
      <?php include "header.php";?>
    </header>
    
    <!-- Data -->
    <?php
    if (isset($_SESSION["user_id"])) $user_session = $_SESSION["user_id"];
    else $user_session ="";
	date_default_timezone_set('Asia/Seoul');
	$num  = $_GET["num"]; 

	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
  $email = $row["email"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$title    = $row["title"];
	$content    = $row["content"];
	$file_name = $row["file_name"];
  $file_copied  = $row["file_copied"];
  $real_name = $file_copied;
  $file_path = "./data/".$real_name;
	$hit          = $row["hit"];
  

  $new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);
    ?>
    
    <!-- Body -->
    <section id="one" class="main style8 dark fullscreen flex-wrap">
      
    <div class = "post_box">
    <div class = "post">  
    <div class="post_inform">
          <?=$name?>&nbsp;·&nbsp;
          
          <?=$regist_day?>&nbsp;
          <span class="right_float">
          <i class="fa fa-eye" aria-hidden="true"></i> : <?=$hit?>
</span>
        </div>  
      <header>
          <h2><?=$title?></h2>
        </header>
        <div class="image post-image">
        <img src="<?=$file_path?>">
        </div>
        <p>
            <?=$content?>
        </p>
        <div class="right_area">
        <a href="javascript: Like();" class="icon heart">
     <img src="https://cdn-icons-png.flaticon.com/512/812/812327.png" alt="찜하기"></a>
        </div>
        
        <!-- delete -->
        <?php
				if($user_session == $email) {
					?>
          <div style=" margin-bottom:2vw; margin-right:-3.2vw;">
				<li><button style="float:right; margin:0 0 0 0.4vw;" onclick="location.href='board_delete.php?num=<?=$num?>'">Delete</button></li>
				<li><button style="float:right" onclick="location.href='board_modify_form.php?num=<?=$num?>'">Modify</button></li>
        </div>
					<?php
					} // 본인만 글 삭제 가능
					?>
    </div>
    
    
    <?php
      $sql = "select * from comment where num=$num";
      $result = mysqli_query($con, $sql);
      $total_record = mysqli_num_rows($result); // 전체 글 수

	    $scale = 10;
  
	    // 전체 페이지 수($total_page) 계산 
	    if ($total_record % $scale == 0)     
		  $total_page = floor($total_record/$scale);      
	    else
		  $total_page = floor($total_record/$scale) + 1; 
  
	    // 표시할 페이지($page)에 따라 $start 계산  
	    $start = 0;      
  
	    $number = $total_record - $start;
      ?>
    <div class="comment">
        <header><h2>Comment</h2></header>
        <div class="comment_list">
      <?php
      for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
      {
        mysqli_data_seek($result, $i);
        // 가져올 레코드로 위치(포인터) 이동
        $row = mysqli_fetch_array($result);
        // 하나의 레코드 가져오기
	    $name        = $row["name"];
      $content = $row["content"];
        $regist_day  = $row["regist_day"];
      ?>
          <div class="user">
          <div class="comment_time"><?=$regist_day?></div>
          <div class="comment_name"><?=$name?></div>
          <div class="comment_content"><?=$content?></div>
      </div>
      <?php
      }
      ?>
      <?php
      $sql = "update board set likeNum=$total_record where num=$num";   
      mysqli_query($con, $sql);
      ?>
       
       
      </div>
      <div class="content">
        <div class="box">
          <form method="post" action="comment.php?num=<?=$num?>">
              <div class="field">
                <textarea
                  name="content"
                  placeholder="Comment"
                  rows="1"
                ></textarea>
              </div>
            </div>
            <input type="hidden" name="name" value="<?=$user_name?>">
            <ul class="actions special small">
              <li><input type="submit" value="Add Comment" /></li>
            </ul>
          </form>
        </div>
            </div>
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
    <script>
    $(function Like(){
    var $likeBtn =$('.icon.heart');
        
        $likeBtn.click(function(){
        $likeBtn.toggleClass('active');

        if($likeBtn.hasClass('active')){
           $(this).find('img').attr({
              'src': 'https://cdn-icons-png.flaticon.com/512/803/803087.png',
               alt:'찜하기 완료'
                });
         }else{
            $(this).find('i').removeClass('fas').addClass('far')
           $(this).find('img').attr({
              'src': 'https://cdn-icons-png.flaticon.com/512/812/812327.png',
              alt:"찜하기"
           })
         }
     })
})
</script>
  </body>
</html>