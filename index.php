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