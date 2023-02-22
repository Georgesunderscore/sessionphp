<?php
//get the session at first 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Récapitulatif des produits</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="divclass">
        <h1>Recap</h1>
    </div>
    
    <div>Count
            <span class="spancalss">
                <?php
                if(isset($_SESSION['products'])){
                    echo" ". count($_SESSION['products']);
                }else{
                    echo "0";
                }
                ?>
            </span>
    </div>

<?php
 
    if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
        echo "<div class='divclass'>
                <h1 >Empty session ...</h1>
              </div>";
    }else{
    echo "<div class='divclass'>
    <table class='tableclass'>".
            "<thead >".
                "<tr>".
                    "<th>Nom</th>".
                    "<th>Prix</th>".
                    "<th>Quantité</th>".
                    "<th>Total</th>".
                "</tr>".
            "</thead>".
        "<tbody>";
    $totalGeneral = 0;
    foreach($_SESSION['products'] as $index => $product){
        echo "<tr>".
                "<td>". $product['name'] ."</td>".
                "<td>". $product['price'] ." € </td>".
                "<td class=''>" . $product['qtt'] . "</td>".
                "<td class=''>" . $product['total'] . "</td>".
            "</tr>";
        $totalGeneral += $product['total'];
    }
    echo "<tr>"."<td class ='tdclass' colspan='4'>".$totalGeneral."€</td>".
         "</tr></tbody></table></div>";
        }        
?>
</body>
</html>