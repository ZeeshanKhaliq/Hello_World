<?php
  include ("db.php");
  include("index.php");

    $id=$_GET['id'];
    $query="Select * from payments where paymentId='".$id."'";
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($result);

?>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update Payements Records
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                      <form class="form-horizontal" role="form" action="phpPaymentsEdit.php" method="post">
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Sender Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="senderName" placeholder="Sender Name" value="<?php echo $row["senderName"]?>">
                                        <input type="hidden" class="form-control" name="Id" placeholder="Sender Name" value="<?php echo $row["paymentId"]?>">

                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Reciver Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="reciverName" placeholder="Reciver Name" value="<?php echo $row["reciverName"]?>">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Assignment</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="assignment" value="<?php echo $row["assignment"]?>" >
                                    </div>
                            </div>
                            <br>
                            <div class="form-group" id="datetimePickerId">
                                <label for="inputType" class="col-md-2 control-label"> Date</label>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="date" placeholder="Date"  value="<?php echo $row["date"]?>" >
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    <script type="text/javascript">
                                      $(function(){
                                        $('#datetimePickerId').datetimepicker();
                                      });
                                    </script>
                            </div>

                            <br>


                            <br>

                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Amount</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="amount"  value="<?php echo $row["amount"]?>">
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
