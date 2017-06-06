<?php
   include ("db.php");

  if (isset($_POST['submit'])) {
    $search=$_POST['search'];

   if ($search!=null) {
        echo $search;
         $sql="SELECT * FROM clients WHERE clientName like '%".$search."%' ";
         $result=mysqli_query($connection,$sql);
       }
     }
 ?>

 <script type="text/javascript">


   var btn = document.getElementById('myBtn');
   btn.addEventListener('click', function() {
     document.location.href = '<?php echo table.php; ?>';
   });


 </script>
 <?php include ("index.php"); ?>


 <body>
   <div id="wrapper">
       <div id="page-wrapper">
             <div class="container-fluid">
                         <div class="row">
                             <div class="col-lg-12">
                                 <h1 class="page-header" >
                                     All Projects
                                 </h1>
                                 <form  class="form-search form-horizontal pull-left" method="post" action="table.php" >

                                   <div class="form-group">

                                        <div class="col-md-8">
                                          <button type="All Records"  class="btn btn-info"  >
                                               All Records
                                          </button>
                                        </div>

                                   </div>

                                 </form>

                                   <form  class="form-search form-horizontal pull-right" method="post" action="search.php">

                                     <div class="form-group">

                                             <div class="col-md-8">
                                                 <input type="text" class="form-control" name="search" placeholder="Search">
                                             </div>
                                             <button type="submit"  class="btn btn-info" name="submit" >
                                                   <span class="glyphicon glyphicon-search"></span> Search
                                             </button>
                                     </div>

                                   </form>
                             </div>
                 </div>
                 <div class="row" >

                     <div class="col-lg-12">


                         <div class="table-responsive">


                             <table class="table table-bordered table-hover table-striped" id="header-fixed" style="width:100%" >
                                 <thead>
                                     <tr>
                                         <th class="col-xs-1">Id</th>
                                         <th class="col-xs-1">Client Name</th>
                                         <th class="col-xs-1">Assignment</th>
                                         <th class="col-xs-1">Date</th>
                                         <th class="col-xs-1">Due Date</th>
                                         <th class="col-xs-1">Amount ($) </th>
                                         <th class="col-xs-1">Expert</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                       while ($rows=mysqli_fetch_assoc($result)) {


                                           echo "<tr>";
                                           echo "<td>" .$rows['clientId']. "</td>";
                                           echo "<td>" .$rows['clientName']. "</td>" ;
                                           echo "<td>" .$rows['assignment']. "</td>";
                                           echo "<td>" .$rows['date']. "</td>" ;
                                           echo "<td>" .$rows['duedate']. "</td>" ;
                                           echo "<td>" .$rows['amount']. "</td>";
                                           echo "<td>" .$rows['expertId']. "</td>";

                                           echo "</tr>";
                                         }
                                     ?>
                                   </tbody>
                             </table>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </div>

     <script src="js/jquery.js"></script>

     <script src="js/bootstrap.min.js"></script>

 </body>

 </html>
