<?php 
  session_start();
  require_once "config/connexion.php";
  $email = $_SESSION['email'];
  $sql = 'SELECT * FROM utilisateur WHERE email = "'.$email.'"';
  if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_array($result);
      $prenom = $row['first_name'];
      mysqli_free_result($result);
    }
    else{
        echo "Oops! Something went wrong. Please try again later.";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Magnificent - your online clothing store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Meie+Script&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    <?php 
      include "bootstrap-icons.css";
      include "bootstrap.min.css";
      include "all.css";
      include "navbar.css";
      include "home.css";
      include "footer.css";
    ?>
  </style>
</head>

<body>
  
  <?php 
    include "navbar.php";
  ?>
  <div class="container-fluid" style="background-color: rgb(250, 205, 212); height: auto ;">
  <?php 
    echo '<h1 class="text-center text-uppercase welcome">WELCOME '.$prenom.'</h1><br>';
  ?>
  <p class="text-center reduc">profitez de jusqu'à -70% de réduction sur votre première commande</p>
  <div class="d-flex flex-wrap">
    <?php 
      require_once "config/connexion.php";
    
      $sql = 'SELECT * FROM produit where categorie = "home"';
      if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0){
            $i = 0;
              while($row = mysqli_fetch_array($result) and $i < 5){
                echo '<a class="card col-2 cart" href="produit.php?cat='.$row['categorie'].'&img='.$row['image1'].'">';
                  echo '<img class="card-img-top image" src="'.$row['image1'].'" alt="Card image cap">';
                  echo '<div class="card-body">';
                    echo '<h5 class="titre">'.$row['titre'].'</h5>';
                    echo '<p class="price1">$ '.$row['prix'].'</p>';
                  echo '</div>';
                echo '</a>';
                $i++;
              }
              mysqli_free_result($result);
          }
          else{
              echo "Oops! Something went wrong. Please try again later.";
          }
      }
    ?>
  </div>
  </div>

  <!--categories-->
<div class="container-fluid p-3" style="background-color: #fa9a9a; margin-top: 40px;">
  <h1 class="text-center">SHOPPER PAR</h1>
  <div id="sld" class="carousel slide carousel-multi-item" data-bs-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner w-50 m-auto" >
      <div class="carousel-item active">
        <div class="d-flex">
          <a href="foulard.php" class="card m-2">
              <img class="card-img-top" src="foulard/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">FOULARD</h4>
              </div>
          </a>
          <a href="robe.php" class="card m-2">
              <img class="card-img-top" src="robe/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">ROBE</h4>
              </div>
          </a>
          <a href="blouse.php" class="card m-2">
              <img class="card-img-top" src="blouse/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">BLOUSE</h4>
              </div>
          </a>
          <a href="T-Shirt.php" class="card m-2">
              <img class="card-img-top" src="T-Shirt/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">T-SHIRT</h4>
              </div>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex">
          <a href="sweater.php" class="card m-2">
              <img class="card-img-top" src="sweater/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">SWEATER</h4>
              </div>
          </a>
          <a href="pull.php" class="card m-2">
              <img class="card-img-top" src="pull/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">PULL</h4>
              </div>
          </a>
          <a href="pantalon.php" class="card m-2">
              <img class="card-img-top" src="pantalon/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">PANTALON</h4>
              </div>
          </a>
          <a href="pyjama.php" class="card m-2">
              <img class="card-img-top" src="pyjama/p1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">PYJAMA</h4>
              </div>
          </a>
        </div>
      </div>
    </div>
    <!--Controls-->
    <button class="carousel-control-prev" type="button" data-bs-target="#sld" data-bs-slide="prev">
      <img src="icons/chevron-left.svg" class="chevron" width="35" height="35" alt=""/>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#sld" data-bs-slide="next">
      <img src="icons/chevron-right.svg" class="chevron" width="35" height="35" alt=""/>
    </button>
    <!--/.Controls-->
  </div> 
</div>
<!--categories-->
 
<div class="container bg-white products">
    <div class="d-flex mb-5 margin">
        <div class="flex-fill border-top border-2 border-dark h1"></div>
        <div class="h1 text-uppercase text-center">Nouveautés</div>
        <div class="flex-fill border-bottom border-2 border-dark h1"></div>
    </div>
      <div class="row">
      <?php
    require_once "config/connexion.php";
    
    $sql = 'SELECT * FROM produit where categorie = "nouveautes"';
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
          $i = 0;
            while($row = mysqli_fetch_array($result) and $i < 4){
                echo '<div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">';
                    echo '<div class="product"> <img src="'.$row['image1'].'" alt="">';
                        echo '<ul class="d-flex align-items-center justify-content-center list-unstyled icons">';
                          echo '<a href="produit.php?cat='.$row['categorie'].'&img='.$row['image1'].'" class="icon"><img class="m-icon" src="icons/arrows-fullscreen.svg" alt=""/></a>';
                          echo '<a class="icon mx-3"><img class="m-icon" src="icons/suit-heart.svg" alt=""/></a>';
                          echo '<a class="icon"><img class="m-icon" src="icons/bag-fill.svg" alt=""/></a>';
                        echo '</ul>';
                    echo '</div>';
                    if($row['reduction']){
                      echo '<div class="tag bg-red"> -'.$row['reduction'].'% </div>';
                    }
                    echo '<div class="title pt-4 pb-1">'.$row['titre'].'</div>';
                    echo '<div class="d-flex align-content-center justify-content-center"><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/></div>';
                    if($row['ancien_prix']){
                      echo '<div class="price"><small><s class="text-secondary price">$ '.$row['ancien_prix'].'</s></small> $ '.$row['prix'].'</div>';
                    }
                    else{
                      echo '<div class="price">$ '.$row['prix'].'</div>';
                    }
                echo '</div>';
                $i++;
            }
            mysqli_free_result($result);
        }
        else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    ?>
    <button class="btn my-1 view" type="button" onclick="window.location.href='nouveautes.php'" style="background-color: #fa9a9a;">VIEW ALL</button>
      </div>
</div>

<div class="container bg-white products">
  <div class="d-flex mb-4 margin">
    <div class="flex-fill border-top border-2 border-dark h1"></div>
    <div class="h1 text-uppercase text-center">top trending</div>
    <div class="flex-fill border-bottom border-2 border-dark h1"></div>
  </div>
  <div class="row">
  <?php
    require_once "config/connexion.php";
    
    $sql = 'SELECT * FROM produit where categorie = "top_trending"';
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
          $i = 0;
            while($row = mysqli_fetch_array($result) and $i < 4){
                echo '<div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">';
                    echo '<div class="product"> <img src="'.$row['image1'].'" alt="">';
                    echo '<ul class="d-flex align-items-center justify-content-center list-unstyled icons">';
                      echo '<a href="produit.php?cat='.$row['categorie'].'&img='.$row['image1'].'" class="icon"><img class="m-icon" src="icons/arrows-fullscreen.svg" alt=""/></span></a>';
                      echo '<a class="icon mx-3"><img class="m-icon" src="icons/suit-heart.svg" alt=""/></a>';
                      echo '<a class="icon"><img class="m-icon" src="icons/bag-fill.svg" alt=""/></a>';
                    echo '</ul>';
                    echo '</div>';
                    if($row['reduction']){
                        echo '<div class="tag bg-red"> -'.$row['reduction'].'% </div>';
                    }
                    echo '<div class="title pt-4 pb-1">'.$row['titre'].'</div>';
                    echo '<div class="d-flex align-content-center justify-content-center"><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/></div>';
                    if($row['ancien_prix']){
                      echo '<div class="price"><small><s class="text-secondary price">$ '.$row['ancien_prix'].'</s></small> $ '.$row['prix'].'</div>';
                    }
                    else{
                      echo '<div class="price">$ '.$row['prix'].'</div>';
                    }
                echo '</div>';
                $i++;
            }
            mysqli_free_result($result);
        }
        else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    ?>
    <button class="btn my-1 view" type="button" onclick="window.location.href='top_trending.php'" style="background-color: #fa9a9a;">VIEW ALL</button>
  </div>
</div>

<div class="container bg-white products">
  <div class="d-flex mb-5 margin">
      <div class="flex-fill border-top border-2 border-dark h1"></div>
      <div class="h1 text-uppercase text-center">offres temporaire</div>
      <div class="flex-fill border-bottom border-2 border-dark h1"></div>
  </div>
  <div class="row">
  <?php
    require_once "config/connexion.php";
    
    $sql = 'SELECT * FROM produit where reduction IS NOT NULL';
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
          $i = 0;
            while($row = mysqli_fetch_array($result) and $i < 4){
                echo '<div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">';
                    echo '<div class="product"> <img src="'.$row['image1'].'" alt="">';
                    echo '<ul class="d-flex align-items-center justify-content-center list-unstyled icons">';
                      echo '<a href="produit.php?cat='.$row['categorie'].'&img='.$row['image1'].'" class="icon"><img class="m-icon" src="icons/arrows-fullscreen.svg" alt=""/></a>';
                      echo '<a class="icon mx-3"><img class="m-icon" src="icons/suit-heart.svg" alt=""/></a>';
                      echo '<a class="icon"><img class="m-icon" src="icons/bag-fill.svg" alt=""/></a>';
                    echo '</ul>';
                    echo '</div>';
                    if($row['reduction']){
                        echo '<div class="tag bg-red"> -'.$row['reduction'].'% </div>';
                    }
                    echo '<div class="title pt-4 pb-1">'.$row['titre'].'</div>';
                    echo '<div class="d-flex align-content-center justify-content-center"><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/><img class="star" src="icons/star-fill.svg"/></div>';
                    if($row['ancien_prix']){
                      echo '<div class="price"><small><s class="text-secondary price">$ '.$row['ancien_prix'].'</s></small> $ '.$row['prix'].'</div>';
                    }
                    else{
                      echo '<div class="price">$ '.$row['prix'].'</div>';
                    }
                echo '</div>';
                $i++;
            }
            mysqli_free_result($result);
        }
        else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_close($link);
    ?>
    <button class="btn my-1 view" type="button" onclick="window.location.href='offres.php'" style="background-color: #fa9a9a;">VIEW ALL</button>
  </div>
  </div>

    <?php
      include "footer.php";
    ?>
</div>
</body>
</html>
