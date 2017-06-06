
<?php include ("index.php") ?>
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
                            Add payments
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                      <form class="form-horizontal" role="form" action="addPaymentsEnd.php" method="post">
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Sender Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="senderName" placeholder="Sender Name">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Reciver Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="reciverName" placeholder="Reciver Name">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Assignment</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="assignment" placeholder="Assignment">
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
                                <label for="inputType" class="col-md-2 control-label">Amount</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="amount" placeholder="Type">
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
