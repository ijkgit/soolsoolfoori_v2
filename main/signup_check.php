<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_check = $_POST["password_check"];

    $con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
    
    $sql1 = "select * from members where name='$name'";
    $result1 = mysqli_query($con, $sql1);
    $match1 = mysqli_num_rows($result1);

    $sql2 = "select * from members where email='$email'";
    $result2 = mysqli_query($con, $sql2);
    $match2 = mysqli_num_rows($result2);
    if(!$name) {
        {
            echo("
                <script>
                    window.alert('Please input the name')
                    history.go(-1)
                </script>
                ");
        }
    }
    else if(!$email) {
        {
            echo("
                <script>
                    window.alert('Please input the email')
                    history.go(-1)
                </script>
                ");
        }
    }
    else if(!$password) {
        {
            echo("
                <script>
                    window.alert('Please input the password')
                    history.go(-1)
                </script>
                ");
        }
    }
    else if(!$password_check) {
         
            {
                echo("
                    <script>
                        window.alert('Please input the password_check')
                        history.go(-1)
                    </script>
                    ");
            }
        }
    
    if($match1)
        {
            echo("
                <script>
                    window.alert('This name is already in use.')
                    history.go(-1)
                </script>
                ");
        }
    elseif ($match2) 
        {   
            echo("
                <script>
                    window.alert('This email is already in use.')
                    history.go(-1)
                </script>
                ");
        }
    elseif ($password != $password_check)
        {
            echo("
                <script>
                    window.alert('Passwords do not match.')
                    history.go(-1)
                </script>
                ");
        }
    else
        {
            $sql = "insert into members(email, password, name) ";
	        $sql .= "values('$email', '$password', '$name')";

	        mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
            mysqli_close($con);
            
            session_start();
            $_SESSION["user_id"] = $email;
            $_SESSION["user_name"] = $name;

            echo "
	              <script>
	                  location.href = 'index.php';
	              </script>
	          ";
        }
?>