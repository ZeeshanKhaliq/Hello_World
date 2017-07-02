<?php
   include ("db.php");
   if(isset($_POST['Submit'])){

     $clientId=$_POST["clientId"];
     $clientName=$_POST["clientName"];
     $Assignment=$_POST["Assignment"];
     $Date=$_POST["Date"];
     $amount=$_POST["amount"];
     $duedate=$_POST["dueDate"];
     $expertName=$_POST["expertName"];
     
     $query="Update clients set clientName='$clientName',Assignment='$Assignment',Date='$Date',amount='$amount',duedate='$duedate',expertName='$expertName'
    where clientId='".$clientId."'";

     $result=mysqli_query($connection,$query);
     if (! $result) {
         die('Could not Update '.mysql_error());
     }
     else {
         echo "Update Successfully";
        header("Location: table.php");
     }

   }

 ?>
