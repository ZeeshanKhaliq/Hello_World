<?php
 session_start();
 $userName=$_SESSION['userName'];

 ?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Bootstrap Admin Template</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/sb-admin.css" rel="stylesheet">
    <link href="public/css/plugins/morris.css" rel="stylesheet">
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


</head>

<body>

    <div id="wrapper">

      <div id="sidebar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Project  Managment System</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo " ".$userName;?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-user"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo" class="collapse">
                          <li>
                              <a href="table.php">Clients</a>
                          </li>
                          <li>
                              <a href="#">Add Clients</a>
                          </li>
                      </ul>
                  </li>

                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#proj"><i class="fa fa-list"></i> Projects<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="proj" class="collapse">
                        <li>
                        <a href="Project.php"><i class="glyphicon glyphicon-th-list"></i> Projects</a>
                        </li>
                        <li>
                        <a href="forms.php"><i class="fa fa-fw fa-table"></i>Add Projects</a>
                        </li>
                    </ul>
                  </li>

                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#payments"><i class="fa fa-usd"></i> Payments<i class="fa fa-fw fa-caret-down"></i></a>
                          <ul id="payments" class="collapse">
                            <li>
                                  <a href="payments.php"><i class="fa fa-fw fa-edit"></i> Payments</a>
                            </li>
                            <li>
                                  <a href="addPayments.php"><i class="fa fa-fw fa-edit"></i> Payments From Clients</a>
                            </li>
                            <li>
                               <a href="addPayments.php"><i class="fa fa-fw fa-edit"></i> Payments to Experts</a>
                            </li>

                          </ul>
                  </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#second"><i class="glyphicon glyphicon-user"></i> Experts<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="second" class="collapse">

                            <li>
                                <a href="#"><i class="fa fa-users"></i> All Experts</a>
                            </li>
                            <li>
                                <a href="table.php"><i class="fa fa-user" aria-hidden="true"></i> Add Expert</a>
                            </li>
                        </ul>
                </li>

                </ul>
          </div>
      </nav>
 </div>



    </div>

    <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
