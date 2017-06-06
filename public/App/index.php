<?php
 include 'C:\wamp64\www\Client Managment System\clientSystem\App\db.php';   //here include the Connection

 

   $query='Select * from clients';  //here we use the query
     $result= mysqli_query($connection,$query);   //here we execute the query
      while ($rows=mysqli_fetch_assoc($result)) {
        $clientId=$rows['clientId'];
           $clientName=$rows['clientName'];

            echo "<td> {$clientId}  </td>";
            echo "<td>{$clientName}</td>";
      }



?>
