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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
    <!-- fonctionalite row -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="style.css">    
</head>
<body>
<div class="pos-f-t">
        <nav class="navbar navbar-dark bg-dark r-expand-lg navbar-light bg-light sticky-top" >
            <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarToggleExternalContent" 
                aria-controls="navbarToggleExternalContent" aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a href="recap.php" class="nav-link">Products Recap  
                        
                        </a> 
                    <!-- <a class="nav-link" href="#">Recap</a> -->
                </li>
            </ul>
        </div>
    </div>
</div>
<span class="spanclass">
    Les nombres des produit:
    <?php
        //get the current session if exist  else faut la cree 
        // session_start();
        if(isset($_SESSION['products'])){
            echo count($_SESSION['products']);
        }else{
            echo "0";
        }
        ?>
</span>
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
    <table  class='table table-bordered'>".
            "<thead >".
                "<tr>".
                    "<th>Numero</th>".
                    "<th>Nom</th>".
                    "<th>Prix</th>".
                    "<th>Quantité</th>".
                    "<th>Total</th>".
                    "<th>Delete</th>".
                "</tr>".
            "</thead>".
        "<tbody>";
    $totalGeneral = 0;
    foreach($_SESSION['products'] as $index => $product){
        echo "<tr>".
                "<td class='tdclass' >".$index."</td>".
                "<td>". $product['name'] ."</td>".
                // "<td>". $product['price'] ." € </td>".
                //espace &nbsp;
                "<td class='tdclass'>".number_format($product['price'],2, ",", "&nbsp;")."&nbsp;€</td>".
                // passer le parametre id d-flex justify-content-evenly 
                "<td >".
                    "<a  href='traitement.php?action=moins&id='".$index.">-</a>".
                        $product['qtt'].
                    "<a  href='traitement.php?action=plus&id='".$index."> +</a></td>".
                
                // "<td class=''>" . $product['total'] . "</td>".
                "<td class='tdclass'>".number_format($product['total'],2, ",", "&nbsp;")."&nbsp;€</td>".

                
                "<td><a href='traitement.php?action=removeProduct&id='".$index."'class='text-decoration-none'>RP</a></td>".





            "</tr>";
        $totalGeneral += $product['total'];
    }
    echo "<tr>"."<td class ='tdclass' colspan='5'>".$totalGeneral."€</td>".
         "<td><a class='btn btn-danger' href='traitement.php?action=clear'>Clear All</a></td>".
         "</tr></tbody></table></div>";
        }        
?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>