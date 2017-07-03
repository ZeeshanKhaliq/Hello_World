
<?php
include ("index.php");
include ("db.php");
  if ($_GET['act']=="edit") {
         $Id=$_GET['id'];
         $sql="Select * from clients where clientId='".$Id."'";
         $result=mysqli_query($connection,$sql);
         $rows=mysqli_fetch_array($result);

       }


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
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add payments
                        </h1>

                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">

                      <form class="form-horizontal" role="form" action="addPaymentsEnd.php" method="post">
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Sender Name</label>
                                    <div class="col-md-4">
                                      <input type="text" class="form-control" name="senderName" placeholder="Sender Name" value="<?php echo isset($_GET['act']) && $_GET['act']=="edit" ?  $rows['clientName'] : ""; ?>" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Payment Procedure</label>
                                    <div class="col-md-4">

                                       <select class="" name="paymentProcedure">

                                       </select>

                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Reciver Name</label>
                                  <?php
                                    $sql="select * from recivers";
                                    ?>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="reciverName" placeholder="Reciver Name" required>
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Assignment</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="assignment" placeholder="Assignment" value="<?php echo isset($_GET['act']) && $_GET['act']=="edit" ?  $rows['assignment'] : ""; ?>">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group" id="datetimePickerId">
                                <label for="inputType" class="col-md-2 control-label"> Date</label>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="date" placeholder="Date" value="<?php echo isset($_GET['act']) && $_GET['act']=="edit" ?  $rows['date'] : ""; ?>" >

                                    </div>

                            </div>

                            <br>


                            <br>

                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Amount</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="amount" placeholder="Type" value="<?php echo isset($_GET['act']) && $_GET['act']=="edit" ?  $rows['amount'] : ""; ?>">
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
