<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Meie+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Paiement à la livraison</title>
    <style>
      <?php 
        include "bootstrap-icons.css";
        include "bootstrap.min.css";
        include "all.css";
        include "paymentToshipping.css";
        include "footer.css";
        include "navbar.css";
      ?>
    </style>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <h1 class="title">Service après vente</h1>
    <h3 class="title3">Comment puis-je retourner un article ?</h3>
    <p class="contenu">Si vous avez ouvert un litige et qu'il faut que vous retourniez la marchandise, veuillez le faire dans un délai de 10 jours(peut varier selon les pays, veuillez vérifier l'information sur la page Détails du litige): </p>
    <p style="margin-left:20%"> <br>  Étape 1: Emballer la marchandise avec l'emballage d'origine pour s'assurer qu'elle ne sera pas endommagé en transit ;
    <br> Étape 2 : Vérifier l'adresse de retour sur la page Détails du litige ;
    <br> Étape 3 : Expédier la marchandise avec un suivi logistique;  
    <br> Étape 4 : Soumettre le numéro de suivi et les informations de logistique dans le système.</p>
    <h3 class="title3" > Comment retourner la marchandise sans litige ?</h3>
    <p class="contenu">Si vous ne pouvez pas ouvrir de litige et que vous souhaitez retourner la marchandise pour un remboursement/renvoi/réparation
      (l'ouverture d'un litige est recommandée) :</p>
    <p style="margin-left:20%">
    Étape 1: Contacter le vendeur pour trouver un accord et obtenir l'adresse de retour du vendeur;
    <br>Étape 2 : Emballer la marchandise avec l'emballage d'origine pour s'assurer qu'elle ne sera pas endommagée en transit ;
    <br>Étape 3 : Expédier la marchandise avec un suivi logistique;
    <br>Étape 4 : Envoyer le numéro de suivi et les informations de logistique au vendeur pour le suivi.   
    </p>
    <h3 class="title3">Quand vais-je obtenir le remboursement après le retour de la marchandise ?</h3>
    <p class="contenu"><b>Avec litige :</b> le vendeur confirmera la réception 30 jours après que les informations de suivi seront soumises au système. Le remboursement sera effectué sur votre compte en 3-20 jours ouvrables. Si la marchandise n'est pas livrée au vendeur, l'équipe de litige d'AliExpress interviendra,
      veuillez donc faire attention aux mises à jour du processus de retour.
    <br><b>Sans litige :</b> Veuillez rester en contact avec le vendeur, fournir votre compte et suggérer au vendeur d'effectuer le remboursement 
    une fois qu'il aura reçu la marchandise. </p>
    <h1 class="title">Commande et paiment</h1>
    <h3 class="title3">Pourquoi est-il toujours écrit « En attente de paiement » après que j'ai payé ?</h3>
    <p class="contenu">1, Si vous avez attendu plus que prévu par rapport au calendrier de réception des paiements, veuillez vérifier si la commande a été modifiée ou annulée. 
        Le paiement ne peut être traité avec les scénarios ci-dessous:</p>
    <p style="margin-left:20%"> <br>- le prix de votre commande a été changé par le vendeur
    <br>- la commande a été annulée par vous-même
    <br>- la commande a été annulée automatiquement par le système</p>
    <p class="contenu">Dans ce cas, le remboursement vous sera versé quand le paiement sera reçu.
    <br>2, Pendant le Festival Shopping, il y a plus de commandes avec des réductions limitées et des délais de paiement limités. Afin de recevoir le paiement avant la clôture de la commande, 
    veuillez payer votre commande dès que possible.</p>
    <h3 class="title3">Qu'est-ce que le service "Livré en X jours" ?</h3>
    <p class="contenu">Les produits avec l'étiquette "Livré en X jours", signifient que l'acheteur peut recevoir les produits dans les X jours après le paiement.
    <br> Les acheteurs peuvent voir l'étiquette "Livré en X jours" sur lapage de Détail de produit, le Panier, la page de Détails de la commande, la page de Suivi.</p>
    <?php
      include "footer.php";
    ?>           
</body>
</html>