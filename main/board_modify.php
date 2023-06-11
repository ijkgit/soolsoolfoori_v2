<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["user_id"])) $user = $_SESSION["user_id"];
    else $user = "";
	if (isset($_SESSION["user_name"])) $name = $_SESSION["user_name"];
    else $name = "";

    $num  = $_GET["num"];

    $title = $_POST["title"];
    $content = $_POST["content"];
	$category = $_POST["category"];
	$upfile = $_FILES["upfile"]["name"];

	if ( !$title ) {
		echo("
                    <script>
                    alert('Add Title!');
                    history.go(-1)
                    </script>
        ");
                exit;
	}
	if ( !$content ) {
		echo("
                    <script>
                    alert('Add Contents!');
                    history.go(-1)
                    </script>
        ");
                exit;
	}
	if ( !$upfile )
	{
		echo("
                    <script>
                    alert('Add Photo!');
                    history.go(-1)
                    </script>
        ");
                exit;
	}
	$title = htmlspecialchars($title, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);
	
	date_default_timezone_set('Asia/Seoul'); // 시간 디폴트 세팅
	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	$upload_dir = './data/';

	$upfile_name	 = $_FILES["upfile"]["name"];
	$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
	$upfile_type     = $_FILES["upfile"]["type"];
	$upfile_size     = $_FILES["upfile"]["size"];
	$upfile_error    = $_FILES["upfile"]["error"];

	if ($upfile_name && !$upfile_error)
	{
		$file = explode(".", $upfile_name);
		$file_name = $file[0];
		$file_ext  = $file[1];

		$new_file_name = date("Y_m_d_H_i_s");
		$new_file_name = $new_file_name;
		$copied_file_name = $new_file_name.".".$file_ext;      
		$uploaded_file = $upload_dir.$copied_file_name;

		if( $upfile_size  > 10000000 ) {
				echo("
				<script>
				alert('업로드 파일 크기가 지정된 용량(10MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
				history.go(-1)
				</script>
				");
				exit;
		}

		if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
		{
				echo("
					<script>
					alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
					history.go(-1)
					</script>
				");
				exit;
		}
	}
	else 
	{
		$upfile_name      = "";
		$upfile_type      = "";
		$copied_file_name = "";
	}
	
	$con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$hit = $row["hit"];
	$likeNum = $row["likeNum"];

	$sql = "UPDATE board SET email='$user', name='$name', title='$title', content='$content', ";
    $sql .= "regist_day = '$regist_day', hit='$hit', file_name='$upfile_name', file_type='$upfile_type', ";
    $sql .= "file_copied = '$copied_file_name', category = '$category', likeNum= '$likeNum' WHERE num='$num'";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	// $sql = "SELECT num FROM board ORDER BY num DESC LIMIT 1";
	// $result = mysqli_query($con, $sql);
	// $row = mysqli_fetch_array($result);
	// $num = $row["num"];

	// $sql = "insert into comment (num)";
	// $sql .= " values ('$num')";
	// mysqli_query($con, $sql);

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = history.go(-2);
	   </script>
	";
?>

  
