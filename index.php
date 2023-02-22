<!-- <!DOCTYPE html> -->
<!doctype html>
<html lang="en">
    <head>
        <title> Add New Product</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

        <!-- for mobile first -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
        <!-- fonctionalite row -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="style.css"> -->

    </head>
    <body>

    <div id="like_button_container"></div>


  <ul class="nav pull-right">

    <!-- Bootstrap's color utility class -->
    <li class="active"><a class="text-success" href="#">one</a></li>
    
    <!-- Bootstrap's color utility class -->
    <li><a class="text-danger" href="#">two</a></li>

    <!-- Bootstrap's color utility class -->
    <li><a class="text-warning" href="#">three</a></li>

    <!-- Custom color utility class -->
    <li><a class="text-my-own-color" href="#">for</a></li>

  </ul>

  <div id="reactnav" data-menu1="Home" data-url1="index.php" data-menu2="Recap" data-url2="recap.php"> </div>

    <a href="recap.php" class="active">Products Recap Link 
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

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom du produit :</label>
                <input type="text" class ="form-control"  placeholder="Nom du produit" name="name">
            </div>
            <div class="form-group col-md-3">
                <label for="prix">Prix:</label>
                <input type="number"  class ="form-control" placeholder="Prix" name="price">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="prix">Quantité :</label>
            <input type="number"  class ="form-control" name="qtt">  
        </div>

            <input type="submit" class="btn btn-primary col-md-6" name="submit" value="Ajouter le produit">
        </div>
        </div>
        </form>
    </div>
    <!--javascript file   -->
    <script src="main.js"></script>

    <!-- scipt jquery et bootstrap pour ajouter des composant bootstrap carrousel, dropdown, modal -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

    <!-- <script src="like_button.js"></script> -->
    <script src="reactnav.js"></script>


    </body>
</html>