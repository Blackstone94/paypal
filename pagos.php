<?php

    if(!isset($_POST['producto'], $_POST['precio'])){
        exit('Ocurrio un error hola ');
    }

    use PayPal\Api\Payer;  
    use PayPal\Api\Item; 

    require 'configuracion.php';

    $producto=htmlspecialchars($_POST['producto']);
    $precio=htmlspecialchars($_POST['precio']);

    $precio= (int) $precio;
    $envio=0;
    $total=$precio+$envio;

    $compra = new Payer();   
    $compra->setPaymentMethod('paypal');

    $articulo = new Item();
    $articulo->setName($producto)
            ->setCurrency('MXN')
            ->setQuantity(1)
            ->setPrice($precio);

    echo $articulo->getQuantity();      
