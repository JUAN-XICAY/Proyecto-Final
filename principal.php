<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'principal-vista.html';
    }else{
        header ('location: login.html');
    }
        
?>