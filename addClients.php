<?php
 include ("db.php");
    //this code insert the values into Php
  if (isset($_POST['Submit'])) {
           $clientName=$_POST["clientName"];
           $Assignment=$_POST["Assignment"];
           $Date=$_POST["Date"];
           $amount=$_POST["amount"];
           $dueDate=$_POST["dueDate"];

   $sql="INSERT INTO `clients` (`clientId`, `clientName`, `assignment`, `date`, `amount`, `duedate`)
   VALUES (NULL, '{$clientName}', '{$Assignment}', '{$Date}', '$amount','$dueDate') ";


    $result=mysqli_query($connection,$sql);
    if ($result==true) {
      header("Location: forms.php");
    }
    else {
      echo "error";
    }


  }


 ?>
