<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Meie+Script&display=swap" rel="stylesheet">
    <title>Magnificent - your online clothing store</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      <?php 
        include "bootstrap-icons.css";
        include "bootstrap.min.css";
        include "all.css";
        include "navbar.css";
        include "produit.css";
        include "footer.css";
      ?>
    </style>
</head>
<body>
 
<!-- Navbar-->
<?php 
    include "navbar.php";
  ?>
<!-- Navbar -->

<?php 
    require_once "config/connexion.php";
    $sql = 'SELECT * FROM produit where categorie = "'.$_GET['cat'].'" and image1 = "'.$_GET['img'].'"';
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            echo '<div class="container cont d-flex w-75 all" style="margin-top: 130px; margin-left: 200px;">';
                echo '<div class="col-4 slider">';
                    echo '<div id="demo" class="carousel slide" data-bs-ride="carousel" style="height: 580px;">';
                        echo '<div class="carousel-indicators">';
                            echo '<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="black active"></button>';
                            echo '<button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="black"></button>';
                            echo '<button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="black"></button>';
                            echo '<button type="button" data-bs-target="#demo" data-bs-slide-to="3" class="black"></button>';
                            if($row['image5']){
                                echo '<button type="button" data-bs-target="#demo1" data-bs-slide-to="4" class="black"></button>';
                            }
                            if($row['image6']){
                                echo '<button type="button" data-bs-target="#demo" data-bs-slide-to="5" class="black"></button>';
                            }
                        echo '</div>';
                        echo '<div class="carousel-inner">';
                            echo '<div class="carousel-item active">';
                            echo '<img src="'.$row['image1'].'" alt="" class="d-block" style="height: 580px;">';
                            echo '</div>';
                            echo '<div class="carousel-item">';
                            echo '<img src="'.$row['image2'].'" alt="" class="d-block" style="height: 580px;">';
                            echo '</div>';
                            echo '<div class="carousel-item">';
                            echo '<img src="'.$row['image3'].'" alt="" class="d-block" style="height: 580px;">';
                            echo '</div>';
                            echo '<div class="carousel-item">';
                            echo '<img src="'.$row['image4'].'" alt="" class="d-block" style="height: 580px;">';
                            echo '</div>';
                            if($row['image5']){
                                echo '<div class="carousel-item">';
                                echo '<img src="'.$row['image5'].'" alt="" class="d-block" style="height: 580px;">';
                                echo '</div>';
                            }
                            if($row['image6']){
                                echo '<div class="carousel-item">';
                                echo '<img src="'.$row['image6'].'" alt="" class="d-block" style="height: 580px;">';
                                echo '</div>';
                            }
                        echo '</div>';
                        echo '<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">';
                            echo '<img src="icons/chevron-left.svg" width="30" height="30" alt=""/>';
                        echo '</button>';
                        echo '<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">';
                            echo '<img src="icons/chevron-right.svg" width="30" height="30" alt=""/>';
                        echo '</button>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="cont col-5 px-5 py-3 mx-5 tit wid">';
                    echo '<h3>'.$row['titre'].'</h3><br>';
                    if($row['ancien_prix']){
                        echo '<div class="price"><small><s class="text-secondary price">$ '.$row['ancien_prix'].'</s></small> $ '.$row['prix'].'<span class="text-red"> -'.$row['reduction'].'% </span></div><br>';
                    }
                    else{
                        echo '<div class="price">$ '.$row['prix'].'</div><br>';
                    }
                    echo '<h4>Couleur</h4><br>';
                    echo '<p>'.$row['couleur'].'</p><br>';
                    echo '<hr>';
                    echo '<h4>Taille</h4><br>';
                    echo '<p>'.$row['tailles'].'</p>'; 
                    echo '<hr><br><br>';
                    echo '<div class="container d-flex w-75 wid">';
                        echo '<form class="col-8" method="POST" action="orders.php?action=add&id='.$row["id"].'">';
                            echo '<button class="btn view" type="submit" name="add_to_cart" style="background-color: #fa9a9a;"><img src="icons/cart2.svg" width="23" height="23" alt=""/>   Ajouter au panier</button>';
                            echo '<input type="hidden" name="hidden_name" value="'.$row["titre"].'" />';
                            echo '<input type="hidden" name="hidden_price" value="'.$row["prix"].'" />';
                            echo '<input type="hidden" name="hidden_image" value="'.$row['image1'].'" />';
                        echo '</form>';
                        echo '<a href="#" class="col-2 mx-5"><img width="28" height="28" src="icons/suit-heart.svg" alt=""/></a>';
                    echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="container-fluid cont d-flex px-5" style="margin-top: 50px; margin-bottom: 100px;">';
                    echo '<div class="col-8 px-3 wid">';
                        echo '<h4>DESCRIPTION</h4>';
                        echo $row['description'];
                    echo '</div>';
                    echo '<div class="col-4 wid">';
                        echo '<h4>ENTRETIEN</h4>';
                        echo '<p><span class="laundryCare-picto laundryCare-12-picto"></span>Température maximum de lavage 30°c - délicat</p>';
                        echo '<p>Blanchiment interdit</p>';
                        echo '<p>Ne convient pas au séchage en machine</p>';
                        echo '<p>Repassage Doux (110°c)</p>';
                        echo '<p>Nettoyage à sec interdit</p>';
                    echo '</div>';
                echo '</div>';
            mysqli_free_result($result);
        }
        else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
?>

<?php
      include "footer.php";
    ?>
</body>
</html>