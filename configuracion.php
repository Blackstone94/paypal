<?php 
    require ('paypal/autoload.php');
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AbLyHMLxbxIQomrCefehDVcRQPhBPiJ-4bWZSOljYzXNmkhPZJz7usUtlToHDJJr-3dLqKxJtrtLydyO',//Client Id
            'EESzs36WtnOykhL5gN-LldrkfR7rxQQsF_n87WdYz2cFYVcYSOvPIe1tW-GWxlJGoEsGWuDTIkt0RC_Q'//Secret
        )
    );

var_dump($apiContext);