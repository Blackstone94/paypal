<?php
    use Payal\Api\Payer;  
    if(!isset($_POST['producto'], $_POST['precio'])){
        exit('Ocurrio un error hola ');
    }
    require 'configuracion.php';

    $producto=htmlspecialchars($_POST['producto']);
    $precio=htmlspecialchars($_POST['precio']);

    $precio= (int) $precio;
    $envio=0;
    $total=$precio+$envio;

    $compra = new Payer();   
    $compra->setPaymentMethod('paypal');
