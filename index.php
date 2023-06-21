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
      
} else {
    switch ($_GET['pag']) {
        case"quotes":
            $dataQuote = $_POST;
            if(isset($_POST['id'])&&isset($_POST['amount'])&&isset($_POST['product'])){
                require_once 'views/quotes/quoteForm.php'; 
            }
            
            break;
        default:
            break;
    }
}

require_once"views/frame/footer.php";  
