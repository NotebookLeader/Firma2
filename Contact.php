<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Leader Realty</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <center><img alt="image" class="img-circle" src="img/Logo.jpg" />
                             </span>


                    </div>
                    <div class="logo-element">
                        ADM
                    </div>
                </li>




                    <li >
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li ><a href="PruebaC.php">Creation</a></li>
                            <li ><a href="Edit_Users.php">User Search</a></li>

                            <!--<li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                        </ul>
                    </li>
                    <li class="active" >
                        <a href="#"><i class="fa fa-child"></i> <span class="nav-label">Contact </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li class="active" ><a href="Contact.php">Creation Contact </a></li>
                            <li  ><a href="Edit_Contact.php">Edit Contact </a></li>

                          <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="fa fa-check-square-o"></i><span class="fa arrow"></span><span class="hidden-tablet">Confirm Request</span></a>
                        <ul class="nav nav-second-level collapse">
                          <li><a href="Crear.php">Create File</a></li>
                          <li><a href="File.php">View File</a></li>
                        </ul>
                    </li>

                    <!--Cod Agregago-->

                      <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Privilege </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">



                            <li  ><a href="CrearPrivi.php">Create Privilege </a></li>
                            <li  ><a href="Edit_Privi.php">Edit Privilege </a></li>

                          <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                        </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-th"></i> <span class="nav-label">Rol</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">



                          <li  ><a href="ViewRol.php">Create Rol</a></li>
                          <li  ><a href="EditRol.php">Edit Rol</a></li>

                        <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                      </ul>
                  </li>


                            <!--<li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>

       <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to the Leader Realty</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="fa fa-power-off" data-toggle="dropdown" href="#">
                        </i>Get Out
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                                <div>
                                    <Center><img alt="image" class="img-circle" src="img/CEO.jpg">
                                </div>
                            </a>
                        </li>



                        <li>

                        </li>
                        <li class="divider"></li>


                <div class="row">
                    <div class="col-xs-4">
                      <center>
                          <li ><a href="Login.php" style="color:" type="button"   class="btn btn-primary ">Get out</a></li>



                          <center>
                    </div>
                    <div class="col-xs-4">

                    </div>
                    <div class="col-xs-4" align="LEFT">
                      <li ><a href="" style="color:" type="button"   class="btn btn-primary ">Edit</a></li>



                    </div>

                </div>




            </ul>

        </nav>
        </div>





            <!--Cuerpo-->

            <div>

                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                      <li ><a href="Contact.php" style="color:#339FFF">New Contact</a></li>
                        <li><a href="Edit_Contact.php" style="color:#339FFF">Edit Contact</a></li>

                    </ul>
                    <div class="tab-content">
                      <form  method="POST" id="formulario" class="form-horizontal">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <i class="fa fa-male"></i> &nbsp;&nbsp;Add my people
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">

                                        </div>

                                        <BR>
                                        <div class="row">
                                                          <div class="col-xs-4">
                                                              <span class="ol-xs-3">
                                                                <div class="input-group">
                                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                     <input onkeypress="return soloLetras(event)" type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                                                                </div>
                                                          </div>
                                                         <div class="col-xs-4">
                                                         <div class="input-group">
                                                                   <span class="input-group-addon"><i class="glyphicon fa fa-envelope-o"></i></span>
                                                                   <input  type="text" class="form-control" name="email" id="email" placeholder="Email">
                                                         </div>
                                                        </div>
                                                         <div class="col-xs-4">
                                                        <div class="input-group">
                                                                  <span class="input-group-addon"><i class="glyphicon  fa fa-users"></i></span>
                                                                   <select type="text"   class="form-control " name="rol" id="rol"  <i class="glyphicon  fa fa-users"></i>>
                                                                           <option id="rol1" name="loop1" selected="selected" disabled="disable" >Selec to loop</option>
                                                             </select>
                                                    </div>
                                                    </div>
                                        </div>
                                        <BR>
                                        <div class="row">
                                                        <div class="col-xs-4">
                                                              <div class="input-group">
                                                                   <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                                                   <input onkeypress="return validaNumericos(event)" type="text" class="form-control" name="hphone" id="hphone" placeholder="PHONE">
                                                              </div>
                                                       </div>
                                                        <div class="col-xs-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon  fa fa-phone-square"></i></span>
                                                                    <input  onkeypress="return validaNumericos(event)" type="text" class="form-control" name="ophone" id="ophone" placeholder="OFFICE PHONE">
                                                                </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                                                    <input onkeypress="return validaNumericos(event)" type="text" class="form-control" name="cphone" id="cphone" placeholder="CELL PHONE">
                                                            </div>
                                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <div class="input-group">
                                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-print"></i></span>
                                                                        <input onkeypress="return validaNumericos(event)"  type="text" class="form-control" name="fnumber" id="fnumber" placeholder="FAX NUMBER">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="input-group">
                                                                        <span class="input-group-addon"><i class="glyphicon  fa fa-road"></i></span>
                                                                        <input  onkeypress="return validaNumericos(event)" type="text" class="form-control" name="snumber" id="snumber" placeholder="STREET NUMBER">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                                                                    <input  type="text" class="form-control" name="sname" id="sname" placeholder="STREET NAME">
                                                                </div>
                                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon  fa fa-sort-numeric-desc"></i></span>
                                                                    <input  onkeypress="return validaNumericos(event)" type="text" class="form-control" name="unumber" id="unumber" placeholder="UNIT NUMBER">
                                                                </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                                    <select   onchange="state();" type="text"   class="form-control" name="country" id="country" >
                                                                      <option  id="country1" name="country1" selected="selected" disabled="disable">Selec to Country</option>
                                                                    </select>
                                                                </div>
                                                        </div>

                                                        <div class="col-xs-4">
                                                             <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon  fa fa-map-marker"></i></span>
                                                                <select  onchange="ciudad();" type="text"   class="form-control " name="sprovince" id="sprovince" >
                                                                           <option id="sprovince1" name="sprovince1" selected="selected" disabled="disable">Selec to state</option>
                                                               </select>

                                                             </div>
                                                        </div>

                                        </div>
                                        <BR>
                                          <div class="row">


                                          <div class="col-xs-4">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="glyphicon  fa fa-map-marker"></i></span>
                                                          <select  type="text"   class="form-control " name="city" id="city" >
                                                               <option id="city1" name="city1" selected="selected" disabled="disable">Selec to City</option>
                                                          </select>
                                                      </div>
                                              </div>
                                           <div class="col-xs-4">
                                               <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon  fa fa-map-marker"></i></span>
                                                    <input  type="text" class="form-control" name="zcode" id="zcode" placeholder="ZIP CODE">
                                               </div>
                                           </div>
                                          <div class="col-xs-4">
                                                <div class="input-group">
                                                     <span class="input-group-addon"><i class="glyphicon  fa fa-building-o"></i></span>
                                                     <input  type="text" class="form-control" name="cname" id="cname" placeholder="COMPANY NAME">
                                                </div>
                                         </div>

                                          </div>
                                          <BR>
                                        <center>
                                          <div class="col-xs-12">
                                           <a href="Contact.php" style="color:" type="button"   class="btn btn-warning ">Cancel</a>
                                            <button id="sendcontact" type="button" class="btn btn-primary" onclick="ValidaContacto();">Save</button>
                                        </div>
                                      </center>
                                        <div id="Registro">
                                        <div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="footer">
                <div>
                    <strong>ALL RIGHTS RESERVED</strong> LEADER REALTY &copy; 2009-2018
                </div>
            </div>
        </div>

    </div>

    <!-- Modal de recuperacion de contraseña -->
    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Forgot password</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your email address and your password will be reset and emailed to you Tranks..</p>
                  </br>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Username" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>
    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/templates/users.js"></script>
    <!-- Validation -->
    <script src="js/templates/Validation.js"></script>
    <script src="js/templates/GuardaContacto.js"></script>
    <!-- Validation -->


    <!-- Page-Level Scripts -->

</body>

</html>
