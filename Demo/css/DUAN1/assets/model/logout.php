<?php 
if (isset($_COOKIE['usr'])) {
  session_unset();
  session_destroy();
  if(isset($_SESSION['usr'])){
    echo "session is still set";
  }else{
    echo "Session is end";
  }
  
   setcookie('usr', '', time() -1, '/');
   setcookie('img', '', time() -1, '/');
}
header('location:../index.php');
?>