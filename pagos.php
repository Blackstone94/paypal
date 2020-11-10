<?php
    if(isset($_POST['producto'],$_POST['precio'])){
        exit('Ocurrio un error');
    }

require 'configuracion.php';
$producto=htmlspecialchars($_POST['producto']);
$precio=htmlspecialchars($_POST['precio']);
$precio=(int)$precio;
$envio=0;
$total=$precio+$envio;
   