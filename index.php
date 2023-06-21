<?php
require_once"config/conexion.php";
require_once"config/parameters.php";
require_once"views/frame/header.php";


if(!isset($_GET['pag'])){
  require_once"views/home-modules/slider.php";
  require_once"views/home-modules/count.php"; 
  require_once"views/home-modules/about.php";
  require_once"views/home-modules/program.php"; 
  require_once"views/home-modules/exhibitors.php";
  require_once"views/home-modules/sponsors.php";  
      
} else {
    switch ($_GET['pag']) {
        case 'exhibitors-inner':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/exhibitors-inner.php'; 
              }else {
                  require_once"views/inner-pages/exhibitors-inner.php";
              }
            break;
            case 'register-inner':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/register-inner.php'; 
              }else {
                  require_once"views/inner-pages/register-inner.php";
              }
            break;
        default:
            break;
    }
}

require_once"views/frame/footer.php";  
