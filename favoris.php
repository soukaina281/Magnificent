<?php 
        session_start();
        require_once "config/connexion.php";
 
        if(isset($_POST["wishlist"])){
                if(isset($_SESSION["shopping_cart"])){
                        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
                        if(!in_array($_GET["id"], $item_array_id)){
                                $count = count($_SESSION["shopping_cart"]);
                                $item_array = array(
                                'item_id' => $_GET["id"],
                                'item_name' => $_POST["hidden_name1"],
                                'item_price' => $_POST["hidden_price1"],
                                'item_image' => $_POST["hidden_image1"]
                                );
                                $_SESSION["shopping_cart"][$count] = $item_array;
                        }
                        else{
                                echo '<script>alert("Item Already Added")</script>';
                        }
                }
                else{
                        $item_array = array(
                        'item_id' => $_GET["id"],
                        'item_name' => $_POST["hidden_name1"],
                        'item_price' => $_POST["hidden_price1"],
                        'item_image' => $_POST["hidden_image1"]
                        );
                        $_SESSION["shopping_cart"][0] = $item_array;
                }
        }
 
        if(isset($_GET["action"])){
                if($_GET["action"] == "delete"){
                        foreach($_SESSION["shopping_cart"] as $keys => $values){
                                if($values["item_id"] == $_GET["id"]){
                                        unset($_SESSION["shopping_cart"][$keys]);
                                        echo '<script>alert("Item Removed")</script>';
                                        echo '<script>window.location="favoris.php"</script>';
                                }
                        }
                }
        }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Mes favoris</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Meie+Script&display=swap" rel="stylesheet">
        <style>
        <?php 
        include "bootstrap-icons.css";
        include "bootstrap.min.css";
        include "all.css";
        include "navbar.css";
        include "orders.css";
        include "footer.css";
        ?>
        </style>
</head>
<body>
        <?php 
                include "navbar.php";
        ?>
        <div style="clear:both; margin-top: 120px;">
                <h1 class="titre">Mes Favoris</h1>
                <div class="matable table-responsive">
                        <table class="table">
                                <tr>
                                <th class="col" width="30%">Produit</th>      
                                <th class="col" width="30%"></th>
                                <th class="col" width="15%">Prix</th>
                                <th class="col" width="15%"></th>
                                </tr>
                                
                                <?php
                                if(!empty($_SESSION["shopping_cart"])){
                                        foreach($_SESSION["shopping_cart"] as $keys => $values){
                                ?>
                                <tr> 
                                <td><?php echo '<img class="img" src="'.$values["item_image"].'"/>' ; ?></td>     
                                <td><?php echo $values["item_name"]; ?></td>
                                <td>$ <?php echo $values["item_price"]; ?></td>
                                <td><a href="favoris.php?action=delete&id=<?php echo $values["item_id"]; ?>"><img src="icons/suit-heart-fill.svg" width="31" height="31" fill="red" alt=""/></a></td>
                                </tr>
                                <?php
                                        }
                                }
                                ?>
                        
                        </table>
                </div>
        </div>
        <?php
                include "footer.php";
        ?>
        <script>
                var table = $('table');
                var rows = table.find('tr:not(:first)');

                $('tr:first').after(rows.get().reverse());
        </script>
</body>
</html>
