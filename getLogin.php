<?php
  session_start();
  include("db.php");


   if (isset($_POST['login-submit'])) {
     $userName=$_POST['userName'];
     $password=$_POST['password'];

     if ($userName!=null && $password !=null) {

          $sql="Select * from users Where userName='".$userName."' AND password='".$password."' ";

          $rows=mysqli_query($connection,$sql);

                 $_SESSION['userName']=$_POST['userName'];
                 echo $_SESSION['userName'];
                 header("Location:index.php");

        }
   }

 ?>
