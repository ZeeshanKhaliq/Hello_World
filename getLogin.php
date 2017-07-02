<?php
  session_start();
  include("db.php");


   if (isset($_POST['login-submit'])) {
     $userName=$_POST['userName'];
     $password=$_POST['password'];

     if ($userName!=null && $password !=null) {

          $sql="Select * from users Where userName='".$userName."' AND password='".$password."' ";
          $result=mysqli_query($connection,$sql);
          //if (mysql_num_rows($result)>0) {

            $_SESSION['userName']=$userName;
            header("Location:index.php");
          //}
       }
   }

 ?>
