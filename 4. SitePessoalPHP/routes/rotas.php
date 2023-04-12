<?php
    if(isset($_GET['p'])){
        $p = $_GET['p'];
        if($p == 'login'){
            include('pages/login.php');
        }else if($p == 'conta'){
            include('pages/conta.php');
        }else if($p == 'registo'){
            include('pages/registo.php');
        }else if($p == 'contacto'){
            include('pages/contacto.php');
        }else{
            include('pages/inicio.php');
        }
    }else{
        include('pages/inicio.php');
    }
?>