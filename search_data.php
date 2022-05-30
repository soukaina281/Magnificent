<?php
    require_once "config/connexion.php";
    
    if (isset($_POST['query'])) {
        $query = "SELECT * FROM produit WHERE titre LIKE '%{$_POST['query']}%' LIMIT 5";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($res = mysqli_fetch_array($result)) {
                echo '<a href="produit.php?cat='.$res['categorie'].'&img='.$res['image1'].'" style="text-decoration: none; color: black; "><p class="res">'.$res['titre'].'</p></a>';
            }
        } else {
        echo "
        <div class='alert alert-danger mt-3 text-center' role='alert'>
            not found
        </div>
        ";
        }
    }
?>