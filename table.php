
<?php include ("index.php"); ?>
 <style media="screen">


 </style>

<body>
  <div id="wrapper">
      <div id="page-wrapper">
            <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header" >
                                    All Projects
                                </h1>

                                  <form  class="form-search form-horizontal pull-left" method="post" action="search.php">

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

                    <div class="col-lg-24">


                        <div class="table-responsive">
                          <?php
                          include ("db.php");   //here include the Connection
                          $query='Select * from clients';               //here we use the query
                          $result= mysqli_query($connection,$query);   //here we execute the query
                          ?>

                            <table class="table table-bordered table-hover table-striped" id="header-fixed" style="width:100%" >
                                <thead>
                                    <tr>
                                        <th class="col-xs-1">Id</th>
                                        <th class="col-xs-2">Client Name</th>
                                        <th class="col-xs-2">Assignment</th>
                                        <th class="col-xs-2">Date</th>
                                        <th class="col-xs-2">Due Date</th>
                                        <th class="col-xs-2">Amount ($) </th>
                                        <th class="col-xs-2">Expert</th>
                                        <th class="col-xs-2" colspan="2">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      while ($rows=mysqli_fetch_assoc($result)) {


                                          echo "<tr>";
                                          echo "<td>" .$rows['clientId']. "</td>";
                                          echo "<td>" .$rows['clientName']. "</td>";
                                          echo "<td>" .$rows['assignment']. "</td>";
                                          echo "<td>" .$rows['date']. "</td>";
                                          echo "<td>" .$rows['duedate']. "</td>";
                                          echo "<td>" .$rows['amount']. "</td>";
                                          echo "<td>" .$rows['expertName']. "</td>";
                                          echo "<td><a href=\"edit.php?id=".$rows['clientId']."\"><span class='glyphicon glyphicon-edit'>Edit</span></a></td>";
                                          echo  "<td><a href=\"delete.php?id=".$rows['clientId']."\"><span class='glyphicon glyphicon-delete'>Delete</span></a></td>";
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
