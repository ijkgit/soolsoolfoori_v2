<?php
    $email   = $_POST["email"];
    $password = $_POST["password"];

   $con = mysqli_connect("localhost", "root", "1234", "soolsoolfoori");
   $sql = "select * from members where email='$email'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);
 

if(!$email) {
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


   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('Incorrect username or password')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["password"];

        mysqli_close($con);

        if($password != $db_pass)
        {

           echo("
              <script>
                window.alert('Incorrect username or password')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["user_id"] = $row["email"];
            $_SESSION["user_name"] = $row["name"];

            echo("
              <script>
                location.href = history.go(-2);
              </script>
            ");
        }
     }        
?>
