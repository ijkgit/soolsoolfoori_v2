<?php
  session_start();
  unset($_SESSION["user_id"]);
  unset($_SESSION["user_name"]);
  session_destroy();
  
  echo("
       <script>
          location.href = history.go(-1);
         </script>
       ");
?>