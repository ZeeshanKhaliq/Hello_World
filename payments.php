
<?php include ("index.php"); ?>
<body>
  <div id="wrapper">
      <div id="page-wrapper">
            <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header" >
                                    All payments
                                </h1>
                                    <form  class="form-search form-horizontal pull-left" method="post" action="paymentsSearch.php">
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
                          <?php
                          include ("db.php");   //here include the Connection
                          $query='Select * from payments';               //here we use the query
                          $result= mysqli_query($connection,$query);   //here we execute the query
                          ?>

                            <table class="table table-bordered table-hover table-striped" id="header-fixed" style="width:100%" >
                                <thead>
                                    <tr>
                                        <th class="col-xs-1">Sender Name</th>
                                        <th class="col-xs-1">Reciver Name</th>
                                        <th class="col-xs-1">Assignment</th>
                                        <th class="col-xs-1">Date</th>
                                        <th class="col-xs-1">Amount ($) </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      while ($rows=mysqli_fetch_assoc($result)) {


                                          echo "<tr>";
                                          echo "<td>" .$rows['senderName']. "</td>";
                                          echo "<td>" .$rows['reciverName']. "</td>" ;
                                          echo "<td>" .$rows['assignment']. "</td>";
                                          echo "<td>" .$rows['date']. "</td>" ;
                                          echo "<td>" .$rows['amount']. "</td>" ;


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
