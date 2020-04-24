<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Inventory System</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/icono-negro.png">

  <!-- PLUGINS CSS -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- PLUGINS JAVASCRIPT -->

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-collapse  sidebar-mini login-page">

  <?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

    echo '<div class="wrapper">';
    /*cabezote*/
    include "modulos/cabezote.php";
    /*menu*/
    include "modulos/menu.php";

    if (isset($_GET["route"])) {
      if (
        $_GET["route"] == "home" ||
        $_GET["route"] == "users" ||
        $_GET["route"] == "categories" ||
        $_GET["route"] == "products" ||
        $_GET["route"] == "customers" ||
        $_GET["route"] == "sales" ||
        $_GET["route"] == "create-sale" ||
        $_GET["route"] == "reports"
      ) {

        include "modulos/" . $_GET["route"] . ".php";
      } else {
        include "modulos/404.php";
      }
    } else {
      include "modulos/home.php";
    }


    /*footer*/
    include "modulos/footer.php";

    echo '</div>';
  } else {
    include "modulos/login.php";
  }
  ?>


  <script src="vistas/js/plantilla.js"></script>
</body>

</html>