<?php

 include ("db.php");
 include("index.php");
    $Id=$_GET['id'];
   $query="Select * from clients where clientId='".$Id."'";
   $result=mysqli_query($connection,$query);
   $row=mysqli_fetch_assoc($result);

 ?>

 <body>
     <div id="wrapper">



         <div id="page-wrapper">

             <div class="container-fluid">

                 <!-- Page Heading -->
                 <div class="row">
                     <div class="col-lg-12">
                         <h1 class="page-header">
                             Update Project Record
                         </h1>

                     </div>
                 </div>
                 <!-- /.row -->

                 <div class="row">
                     <div class="col-lg-12">

                       <form class="form-horizontal" role="form" action="UpdateClients.php" method="post">
                             <div class="form-group">
                                 <label for="inputType" class="col-md-2 control-label">Name</label>
                                     <div class="col-md-4">
                                         <input type="hidden" class="form-control" name="clientId" value="<?php echo $row['clientId'] ?> " >
                                         <input type="text" class="form-control" name="clientName" value="<?php echo $row['clientName'] ?> " >
                                     </div>
                             </div>
                             <br>
                             <div class="form-group">
                                 <label for="inputType" class="col-md-2 control-label">Assignment</label>
                                     <div class="col-md-4">
                                         <input type="text" class="form-control" name="Assignment" value="<?php echo $row['assignment'] ?> ">
                                     </div>
                             </div>
                             <br>
                             <div class="form-group">
                                 <label for="inputType" class="col-md-2 control-label"> Date</label>
                                     <div class="col-md-4">
                                         <input type="text" class="form-control" name="Date" value="<?php echo $row['date'] ?> ">
                                     </div>
                             </div>

                             <br>
                             <div class="form-group">
                                 <label for="inputType" class="col-md-2 control-label">Due Date</label>
                                     <div class="col-md-4">
                                         <input type="text" class="form-control" name="dueDate" value="<?php echo $row['duedate'] ?> ">
                                     </div>
                             </div>
                             <br>
                             <div class="form-group">
                                 <label for="inputType" class="col-md-2 control-label">Amount</label>
                                     <div class="col-md-4">
                                         <input type="text" class="form-control" name="amount" value="<?php echo $row['amount'] ?> ">
                                     </div>
                             </div>

                             <div class="form-group">
                               <label for="dropDown" class="col-md-2 control-label">Experts</label>
                                  <div class="col-md-4">
                                    <select name= "expertName" id= "update_indication_id" class="form-control" required>



                                       <?php

                                         $sql = "SELECT * From experts";
                                         $result=mysqli_query($connection,$sql);
                                           echo "<option value='".$row['expertName']."'>".$row['expertName']."</option>";
                                         while($rows=mysqli_fetch_array($result)){
                                            if ($row['expertName']!=$rows['expertName']) {
                                              echo "<option value='".$rows['expertName']."'>".$rows['expertName']."</option>";
                                            }
                                        }

                                       ?>
                                       </select>
                                  </div>
                             </div>

                           <div class="container">
                                 <div class="col-md-12">
                                     <input type="submit" class="btn btn-primary center-block" name="Submit">

                                 </div>

                           </div>

                     </form>
                         </div>
                   </div>
               </div>

         </div>

     </div>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

 </body>
