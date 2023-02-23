<?php

session_start();


 switch ($_GET['action']) {
    case 'addProduct':
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
                //success message  
                $_SESSION['returnmsg'] = " le Produit " .$name." est Bien ajouter  !";
                $_SESSION['backgroundcol'] = "green";
                $_SESSION['class'] = "has-success";
                var_dump($_SESSION['products']);
                
            }else{
                //error message
                $_SESSION['returnmsg'] = "Erreur Produit Incomplet !";
                $_SESSION['backgroundcol'] = "red";
                $_SESSION['class'] = "has-error";
            }
        }
    header("Location:index.php");
    break;

    case 'plus':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $_SESSION['products'][$id]['qtt']+=1;
        $_SESSION['products'][$id]['total'] += $_SESSION['products'][$id]['price'];
    header("Location:recap.php");
    break;
        
    case 'moins':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if($_SESSION['products'][$id]['qtt'] > 1){
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            $_SESSION['products'][$id]['qtt'] -=1;
            $_SESSION['products'][$id]['total'] -= $_SESSION['products'][$id]['price'];
        }
        else{
            $_SESSION['returnmsg'] = "L'article ".$_SESSION['products'][$id]['name']." dernier produit supprimer !";
            $_SESSION['backgroundcol'] = "red";
            $_SESSION['class'] = "has-warning";
            unset($_SESSION['products']);
        }
    header("Location:recap.php");
    break;

    case 'removeProduct':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        // var_dump($_SESSION['products'][$id]);
        unset($_SESSION['products'][$id]);
    header("Location:recap.php");
    break;

    case 'clear':
        $_SESSION['returnmsg'] = "Aucun Produit dans la list.";
        $_SESSION['backgroundcol'] = "green";
        $_SESSION['class'] = "has-success";

        unset($_SESSION['products']);
    header("Location:recap.php");
    break;
    }  

?>