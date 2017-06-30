
<?php
include ("index.php");
include("db.php");
$query="SELECT * from experts";
$result=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($result))
echo $row['expertName'];
?>
<style media="screen">
.form-horizontal .control-label{
  text-align: left;
}
</style>

<body>
    <div id="wrapper">



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            All Projects
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                      <form class="form-horizontal" role="form" action="addClients.php" method="post">
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="clientName" placeholder="Client Name">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Assignment</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="Assignment" placeholder="Assignment">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label"> Date</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="Date" placeholder="Date">
                                    </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Due Date</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="dueDate" placeholder="Due Date">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Amount</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="amount" placeholder="Type">
                                    </div>
                            </div>
                             <br>
                            <div class="form-group">
                              <label for="dropDown" class="col-md-2 control-label">Experts</label>
                                 <div class="col-md-4">
                                   <select name= "expertName" id= "update_indication_id" class="form-control" required>
                                     <option selected="selected" value="">None</option>
                                      <?php
                                        $sql = "SELECT * From experts";
                                        $result=mysqli_query($connection,$sql);
                                        while($row=mysqli_fetch_array($result))
                                        echo "<option value='". $row['expertName'] . "'>" . $row['expertName'] . "</option>";
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

</html>
