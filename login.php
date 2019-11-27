<?php

    session_start();

    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    
    if(isset($_SESSION['userId']))
    {
        header("Location: index");
        exit();
    }
    

?>  
<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="SOY ANDRES">
    <title>Login Page - Apex responsive bootstrap 4 admin template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="1-column" class=" 1-column  blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper nav-collapsed menu-collapsed">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Login Page Starts-->
<section id="login">
  <div class="container-fluid">
    <div class="row full-height-vh m-0">
      
      <div class="col-12 d-flex align-items-center justify-content-center">

        <div class="card">
  

          <div class="card-content text-center">
            
            <div class="card-body login-img">
              
              <div class="row m-0">
                
                <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
                  
                  <img src="app-assets/img/gallery/login.png" alt="" class="img-fluid mt-5" width="300" height="130">
                  
                  </br></br></br></br>
                  
                <h1 style="color:#86929d;">Expertise + Innovation </h1>
                </div>
                <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                  <h4 class="mb-2 card-title">Inciar Sesión EAX</h4>
                  <p class="card-text mb-3">
                  Complete con su usuario y contraseña para ingresar a su panel.
                  </p>
                  <?php
                    
                    if(isset($_GET['error']))
                    {
                        if($_GET['error'] == 'emptyfields')
                        {
                            echo '<div class="alert alert-danger" role="alert">
                                    <strong>Error: </strong>Complete todos los campos
                                  </div>';
                        }
                        else if($_GET['error'] == 'nouser')
                        {
                            echo '<div class="alert alert-danger" role="alert">
                                    <strong>Error: </strong>Nombre de usuario no existe!
                                  </div>';
                        }
                        else if ($_GET['error'] == 'wrongpwd')
                        {;
                            echo '<div class="alert alert-danger" role="alert">
                                    <strong>Error: </strong>Contraseña incorrecta - 
                                     <a href="reset-pwd" class="alert-link">¿Se te olvidó tu contraseña?                                     </a>
                                  </div>';
                        }
                        else if ($_GET['error'] == 'sqlerror')
                        {
                            echo '<div class="alert alert-danger" role="alert">
                                    <strong>Error: </strongError del sitio web. Póngase en contacto con el administrador para arreglarlo
                                  </div>';
                        }
                        
                    }
                    else if(isset($_GET['newpwd']))
                    {
                        if($_GET['newpwd'] == 'passwordupdated')
                        {
                            echo '<div class="alert alert-success" role="alert">
                                    <strong>Contraseña actualizada </strong>Inicie sesión con su nueva contraseña</div>';
                        }
                    }
                ?>



<form method="post" action="includes/login.inc.php">
                  <input type="text" class="form-control mb-3" id="name" name="mailuid" placeholder="Usuario"/>
                  <input type="password" class="form-control mb-1" id="password" name="pwd" placeholder="Contraseña" />
                  <div class="d-flex justify-content-between mt-2">
                    <div class="remember-me">
                      <div class="custom-control custom-checkbox custom-control-inline mb-3">
                        <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input" />
                        <label class="custom-control-label" for="customCheckboxInline1">
                          Remember Me
                        </label>
                      </div>
                    </div>
                  
                  </div>
                  <div class="fg-actions d-flex justify-content-between">
                    <div class="login-btn">
            
                    </div>
                    <div class="recover-pass">
                      <input class="btn btn-primary" type="submit"  name="login-submit" value="Login"> 


                    </div>
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Login Page Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
  <!-- END : Body-->
</html>