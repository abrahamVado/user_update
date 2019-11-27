
<?php

    session_start();
    include_once 'includes/dbh.inc.php';

    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login");
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
    <title>User Profile Page - Apex responsive bootstrap 4 admin template</title>
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


        <!-- JAX CRUD -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://kit.fontawesome.com/cb1a75ed54.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    
    <!-- JAX CRUD-->


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
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper nav-collapsed menu-collapsed">


   <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <div data-active-color="white" data-background-color="purple-bliss" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="#" class="logo-text float-left">
              <div class="logo-img"><img src="app-assets/img/logo.png" style="width:36px;"></div><span class="text align-middle">  <img src="app-assets/img/eax.png" style="width:90%;"> </span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="collapsed" class="toggle-icon ft-toggle-left"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->    <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
             
          
              <li class="nav-item"><a href="index"><i class="ft-file-text"></i><span data-i18n="" class="menu-title">Registros Grafico EAX</span></a>
              </li>
              <li class="nav-item"><a href="notas_eax"><i class="icon-note"></i><span data-i18n="" class="menu-title">Notas EAX</span></a>
              </li>
              <li class="nav-item"><a href="card_chart"><i class="ft-bar-chart-2"></i><span data-i18n="" class="menu-title">Tarjeta grafico EAX</span></a>
              </li>
              <li class=" nav-item"><a href="users_eax"><i class="icon-user-follow"></i><span data-i18n="" class="menu-title">Usuarios regitrados EAX</span></a>
              </li>
          
            </ul>
          </div>
        </div>
        <!-- main menu content-->
    
         <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->

      <!-- Navbar (Header) Starts-->
      <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
              <form role="search" class="navbar-form navbar-right mt-1">
                <div class="position-relative has-icon-right">
                  <input type="text" placeholder="Search" class="form-control round"/>
                  <div class="form-control-position"><i class="ft-search"></i></div>
                </div>
              </form>
            </div>
            <div class="navbar-container">
              <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                      <p class="d-none">fullscreen</p></a></li>
                  <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-flag font-medium-3 blue-grey darken-4"></i><span class="selected-language d-none"></span></a>
                    <div class="dropdown-menu dropdown-menu-right text-left"><a href="javascript:;" class="dropdown-item py-1"><img src="app-assets/img/flags/mx.png" class="langimg"/><span> Español Mx</span></a></div>
                  </li>
  
  
  
  
  
  
  
                  <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative">
  
  
  <p style="color:#212529;"><?php echo ucwords($_SESSION['f_name']." ".$_SESSION['l_name']); ?></p>
  </a>
  </li>
  
  
    
                  <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative">
  
  
  
                  <img src='uploads/<?php echo $_SESSION["userImg"] ?>' class="rounded-circle" style="width:50px;height:50px;top:-15px;position:relative;border-radius: 50%;background-color:white;">
    </a>
    </li>
  
  
             
    
  
  
  
                  
    
                  <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-user font-medium-3 blue-grey darken-4"></i>
                      <p class="d-none">User Settings</p></a>
                    <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right"><a href="user-profile-page" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>Edit Profile</span></a>
                      <div class="dropdown-divider"></div><a href="includes/logout.inc.php" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                    </div>
                  </li>
  
  
  
  
  
  
  
  
  
  
                  
             
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar (Header) Ends-->

      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--User Profile Starts-->
<!--Basic User Details Starts-->
<section id="user-profile">
  <div class="row">
    <div class="col-12">
      <div class="card profile-with-cover">
        <div class="card-img-top img-fluid bg-cover height-300" style="background: url('app-assets/img/photos/18.png') 50%;opacity: 0.9;"></div>
        <div class="media profil-cover-details row">
          <div class="col-5">
            <div class="align-self-start halfway-fab pl-3 pt-2">
              <div class="text-left">
                <h3 class="card-title blue" style="background-color:white;">The Eternity Group</h3>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="align-self-center halfway-fab text-center">
              <a class="profile-image">
                <img src="uploads/<?php echo $_SESSION["userImg"] ?>" class="rounded-circle img-border width-100 height-100" alt="Card image" style="top:-15px;position:relative;background-color:#263238 !important;"> 
              </a>
            </div>
          </div>
          <div class="col-5">
          </div>
          <div class="profile-cover-buttons">
            <div class="media-body halfway-fab align-self-end">
              <div class="text-right d-none d-sm-none d-md-none d-lg-block">
           
                <button type="button" class="btn btn-primary btn-raised mr-3" data-toggle="modal"
                    data-target="#iconModal"><i class="ft-edit"></i> Editar perfil</button>
              </div>
              <div class="text-right d-block d-sm-block d-md-block d-lg-none">
              <button type="button" class="btn btn-primary btn-raised mr-3" data-toggle="modal"
                    data-target="#iconModal"><i class="ft-edit"></i> Editar perfil</button>
              </div>
            </div>
          </div>
        </div>
        <div class="profile-section">
          <div class="row">
            <div class="col-lg-5 col-md-5 ">
              <ul class="profile-menu no-list-style">
                <li>
                  <a href="#about" class="primary font-medium-2 font-weight-600"></a>
                </li>
                <li>
                  <a href="#user" class="primary font-medium-2 font-weight-600"></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <span class="font-medium-2 text-uppercase"><?php echo ucwords($_SESSION['f_name']." ".$_SESSION['l_name']); ?></span>
              <p class="grey font-small-2"><?php echo $_SESSION['headline']; ?></p>
            </div>
            <div class="col-lg-5 col-md-5">
              <ul class="profile-menu no-list-style">
                <li>
                  <a href="#friends" class="primary font-medium-2 font-weight-600"></a>
                </li>
                <li>
                  <a href="#photos" class="primary font-medium-2 font-weight-600"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>




      







    </div>
  </div>
</section>
<!--Basic User Details Ends-->

<!--About section starts-->
<section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header">Acerca de</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Informacion personal</h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="mb-3">
              <span class="text-bold-500 primary">Sobre mí</span>
              <span class="d-block overflow-hidden">
              <?php echo $_SESSION['bio']; ?>
              </span>
            </div>
            <hr>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="icon-present font-small-3"></i> Cumpleaños:</a></span>
                    <span class="d-block overflow-hidden"><?php echo $_SESSION['birthday']; ?></span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-map-pin font-small-3"></i> Lugar nacimiento:</a></span>
                    <span class="d-block overflow-hidden"><?php echo $_SESSION['birthplace']; ?></span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-globe font-small-3"></i> Vive en:</a></span>
                    <span class="d-block overflow-hidden"><?php echo $_SESSION['livesin']; ?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> Género:</a></span>
                    <span class="d-block overflow-hidden"><?php echo $_SESSION['gender']; ?></span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i> Email:</a></span>
                    <a class="d-block overflow-hidden"><?php echo $_SESSION['emailUsers']; ?></a>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-monitor font-small-3"></i> Web:</a></span>
                    <a class="d-block overflow-hidden">eiffmx.com</a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-smartphone font-small-3"></i> Número teléfonico:</a></span>
                    <span class="d-block overflow-hidden"><a class="d-block overflow-hidden"><?php echo $_SESSION['phone']; ?></a>
</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-briefcase font-small-3"></i> Ocupación:</a></span>
                    <span class="d-block overflow-hidden"><?php echo $_SESSION['headline']; ?></span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-book font-small-3"></i> Incorporación:</a></span>
                    <span class="d-block overflow-hidden"><?php echo $_SESSION['joined']; ?></span>
                  </li>
                </ul>
              </div>
            </div>
            <hr>
            <div class="mt-3">
              <span class="text-bold-500 primary">Pasatiempo:</span>
              <span class="d-block overflow-hidden"><?php echo $_SESSION['hobbies']; ?></span>
            </div>
       






            
          </div>
        </div>
      </div>

      
    </div>

    
  </div>
</section>
<!--About section ends-->




<!--User Profile Starts-->

          </div>
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2019 <a href="#" id="SOY ANDRES"  class="text-bold-800 primary darken-2">SOY ANDRES </a>, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <section>

         <!-- Modal -->
         <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2"> <i class="fa fa-arrow-right"></i> Editar Perfil EAX</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div> 
                        <form action="includes/profileUpdate.inc.php" method='POST' enctype="multipart/form-data" style="padding: 0 30px 0 30px;">
                        <div class="modal-body">
                       
<p>







  
              

                    
              
                    <label class="btn btn-primary">
                        Cambiar <input type="file" id="imgInp" name='dp' hidden>
                    </label>
         


                    <img id="blah"  src="#" class="rounded-circle img-border width-100 height-100" alt="Card image" style="top:-15px;position:relative;"> 






          

                    <h2 class="text-center"><?php echo strtoupper($_SESSION['userUid']); ?></h2>
                    <br>
                  
                    <div class="form-row">
                      <div class="col">
                      <small id="emailHelp" class="form-text text-muted">Nombre:</small>
                        <input type="text" class="form-control" name="f-name" placeholder="Nombre"
                               value="<?php echo $_SESSION['f_name'] ?>" >
                     
                      </div>
                      <div class="col">
                      <small id="emailHelp" class="form-text text-muted">Apellido:</small>
                        <input type="text" class="form-control" name="l-name" placeholder="Apellido" 
                               value="<?php echo $_SESSION['l_name'] ?>" >
                       
                      </div>
                    </div>
                  </br>
                    <div class="form-row">
                    <div class="col">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="email" 
                               value="<?php echo $_SESSION['emailUsers'] ?>" >
                      
</div>
                        <div class="col">
                        <label for="headline">Puesto compañia:</label>
                        <input class="form-control" type="text" id="headline" name="headline" 
                               placeholder="Tu puesto en la compañia" value='<?php echo $_SESSION['headline']; ?>'>

                      
                    </div>
                    </div>




                    
                  
                    <div class="form-group">
                                <label >Género:</label><br>
                                <input id="toggle-on" class="toggle toggle-left" name="gender" value="Masculino" type="radio" 
                                    <?php 
                                        if ($_SESSION['gender'] == 'Masculino'){ ?> 
                                            checked="checked"
                                    <?php } ?>>
                                <label for="toggle-on" class="btn-r">M</label>
                                <input id="toggle-off" class="toggle toggle-right" name="gender" value="Femenino" type="radio"
                                    <?php if ($_SESSION['gender'] == 'Femenino'){ ?> 
                                            checked="checked"
                                    <?php } ?>>
                                <label for="toggle-off" class="btn-r">F</label>
                    </div>
                  
                  <hr>
                  
                    <div class="form-group">
                     <br>
                        
                        <label for="edit-bio">Sobre mí:</label>
                        <textarea class="form-control" id="edit-bio" rows="10" name="bio" 
                            placeholder="Lo que quieres decirle a la gente sobre ti" 
                            ><?php echo $_SESSION['bio']; ?></textarea>
                    </div>
                  


                    <div class="form-row">

                    <div class="col">                        <label for="joined">Ingreso:</label>
                        <input class="form-control" type="text" id="joined" name="joined" 
                               placeholder="Tu puesto en la compañia" value='<?php echo $_SESSION['joined']; ?>'><br>
                               </div>
<div class="col">                               <label for="birthday">Cumpleaños:</label>
                        <input class="form-control" type="text" id="birthday" name="birthday" 
                               placeholder="Tu puesto en la compañia" value='<?php echo $_SESSION['birthday']; ?>'>
                           
                           
                               </div>


                    </div>


                    <div class="form-row">

                    <div class="col">
                        <label for="birthplace"> Lugar nacimiento:</label>
                        <input class="form-control" type="text" id="birthplace" name="birthplace" 
                               placeholder="Tu puesto en la compañia" value='<?php echo $_SESSION['birthplace']; ?>'><br>
                               </div>

                               <div class="col">
                               <label for="livesin">Vive en:</label>
                        <input class="form-control" type="text" id="livesin" name="livesin" 
                               placeholder="Tu puesto en la compañia" value='<?php echo $_SESSION['livesin']; ?>'>
                               </div>

                    </div>


                    <div class="form-group">
                        <label for="phone">Celular:</label>
                        <input class="form-control" type="text" id="phone" name="phone" 
                               placeholder="Tu puesto en la compañia" value='<?php echo $_SESSION['phone']; ?>'><br>
                        
                               <label for="hobbies">Pasatiempo: </label>
                        <textarea class="form-control" id="hobbies"  name="hobbies" 
                            placeholder="Lo que quieres decirle a la gente sobre ti" 
                            ><?php echo $_SESSION['hobbies']; ?></textarea>


                    </div>



                  <hr>
                  
               
  </p>

                         <h5><i class="fa fa-lightbulb-o"></i> Actualizar Contraseña</h5>
                          <p>   <div class="form-group">
                        <input type="password" class="form-control" id="old-pwd" name="old-pwd"
                               placeholder="Contraseña actual">
                    </div>
                  
                    <div class="form-row">
                      <div class="col">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd"
                               placeholder="Nueva contraseña">
                      </div>
                      <div class="col">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd-repeat"
                               placeholder="Repetir contraseña">
                      </div>
                    </div>
                  </p>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-outline-primary" name="update-profile" value="update-profile">Save changes</button>




                          
                        </div>
                      </div>
                    </div>
                  </div>
  </section>

  </form>
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
            
<script>
    var dp = '<?php echo $_SESSION["userImg"]; ?>';
    
    $('#blah').attr('src', 'uploads/'+ dp);
    
    function readURL(input) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
            
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#imgInp").change(function() {
        readURL(this);
      });
      
      
</script>

  </body>
  <!-- END : Body-->
</html>