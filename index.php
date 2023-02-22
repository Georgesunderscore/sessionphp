<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Add New Product</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <a href="recap.php" class="linkclass">Products Recap Link 
        <span class="spanclass">
            <?php
                //get the current session if exist  else faut la cree 
                session_start();
                    if(isset($_SESSION['products'])){
                        echo count($_SESSION['products']);
                    }else{
                        echo "0";
                    }
            ?>
        </span>
        
    </a> 
    <?php
        if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
                    echo "<div class='divclass'><h1>No Product For Current Session!</h1></div>";
                }else{
                    echo "<div class='divclass'>
                            <table class='tableclass'>".
                            "<thead class='theadclass'>".
                                "<tr>".
                                    "<th>Nom</th>".
                                    "<th>Prix</th>".
                                    "<th>Quantité</th>".
                                    "<th>Total</th>".
                                "</tr>".
                            "</thead>".
                        "<tbody>";
                    $sumTotal = 0;
                    //loop all existant products
                    foreach($_SESSION['products'] as $key => $product){
                        echo "<tr>".
                                "<td>".$product['name']."</td>".
                                "<td>".$product['price']."€</td>".
                                "<td>".$product['qtt']."</td>".
                                "<td>".$product['total']."€</td>".
                            "</tr>";
                        $sumTotal += $product['total'];
                    }
                    echo "<tr>".
                            "<td>Total : </td>".
                            "<td>".$sumTotal ."€</td>".
                            "</tr>".
                        "</tbody></table></div>";
                        }
                ?>
  
    <div class="divclass">
        <!-- post pour pas l'ajouter dans le url-->
        <form class="formclass" action="traitement.php?action=addProduct" method="post">
            <div class="divclass">
                <h1>Ajouter un produit</h1>
            </div>

        <div class="divclass">
            <label for="nom">Nom du produit :</label>
            <input type="text" placeholder="Nom du produit" name="name">
        </div>
        <div class="divclass">
            <label for="prix">Prix:</label>
            <input type="number" placeholder="Prix" name="price">
        </div>    

        <div class="divclass">
            <label for="prix">Quantité désiré :</label>
            <input type="number" name="qtt">  
        </div>
            <input type="submit" name="submit" value="Ajouter le produit">
        </div>
        </div>
        </form>
    </div>
    </body>
</html>