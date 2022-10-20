<?php 
session_start();

if(isset($_GET['limite']) && !empty($_GET['limite'])){

    $limite = $_GET['limite'];

    if(!is_numeric($limite)){
        
        $_SESSION['alerta'] = "Só é permitido números";
        header('location:index.php');
    exit;

    }

}else{
    $_SESSION['alerta'] = "Digite um volor";
    header('location:index.php');
    exit;
}
