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
            case 'program-inner':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/program-inner.php'; 
              }else {
                  require_once"views/inner-pages/program-inner.php";
              }
            break;
            case 'detail-inner':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/detail-inner.php'; 
              }else {
                require_once"views/inner-pages/detail-inner.php";
              }
            break;
            case 'ponencia-inner':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/ponencia-inner.php'; 
              }else {
                require_once"views/inner-pages/ponencia-inner.php";
              }
            break;
            case 'registar-brand-inner':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/registar-brand-inner.php'; 
              }else {
                require_once"views/inner-pages/registar-brand-inner.php";
              }
            break;
            case 'contact':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/contact.php'; 
              }else {
                  require_once"views/inner-pages/contact.php";
              }
            break;
            case 'lodging':
            if(isset($_GET['id'])){
                require_once 'views/inner-pages/lodging.php'; 
              }else {
                  require_once"views/inner-pages/lodging.php";
              }
            break;
        default:
            break;
    }
}

require_once"views/frame/footer.php";  
