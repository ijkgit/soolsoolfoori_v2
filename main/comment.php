<?php
session_start();
if (isset($_SESSION["user_id"])) $user_session = $_SESSION["user_id"];
else $user_session ="";
if(!$_SESSION["user_id"]) {
echo("
<script>
  window.alert('Please Login..!');
  location.href = 'login_form.php';
</script>
");
exit;
}
date_default_timezone_set('Asia/Seoul');
$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
$num  = $_GET["num"];
$content = $_POST["content"];
$name = $_POST["name"];
$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
$sql = "insert into comment (num, name, content, regist_day, likeNum) ";
$sql .= "values('$num', '$name', '$content', '$regist_day', 0)";
if(!$content) {
   echo("
   <script>
     window.alert('No Data..!');
     location.href = history.go(-1);
   </script>
   ");
   exit;
   }


mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

mysqli_close($con);                // DB 연결 끊기

echo "
   <script>
    location.href = document.referrer + '#two';
   </script>
";
?>