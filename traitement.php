<?php

session_start();


// switch ($_GET['action']) {
    // case 'addProduct':
        //to control that it is from the button call submit 
        if (isset($_POST['submit'])) {
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
            
            if ($name && $price && $qtt) {
                    $product = [
                        "name" => $name,
                        "price" => $price,
                        "qtt" => $qtt,
                        "total" => $price * $qtt
                    ];
                //ADD THE PRODUCT TO THE LIST OF PRODUCTS 
                $_SESSION['products'] []= $product;
        }

    header("Location:index.php");
    

    }
// }

?>