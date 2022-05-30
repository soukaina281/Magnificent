<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Meie+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Méthodes de paiement</title>
    <style>
      <?php 
        include "bootstrap-icons.css";
        include "bootstrap.min.css";
        include "all.css";
        include "paymentmethods.css";
        include "footer.css";
        include "navbar.css";
      ?>
    </style>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <h1 class="title">Les methodes de paiment chez nous</h1>
    <div style="width: 85%; margin: 0 auto;">
        <img class="image" src="payment/paypal.jpg" alt="">
        <img  class="image" src="payment/visa.jpg" alt="">
        <img class="image" src="payment/mastercard.jpg" alt="">
    </div>
    <h3 class="title3">Comment payer avec QIWI ?</h3>
    <p class="contenu">La limite de paiement de QIWI va de 0,05 USD à 5 000 USD. La limite de paiement de 0,05 USD à 5 000 USD.
         Le portefeuille QIWI a ses propres limitations de paiement. La limitation finale est soumise aux limitations de QIWI et Alipay.
         Pour certains clients, la limitation est de 15 000 RUB par paiement.
    </p>
    <h3 class="title3">Puis-je utiliser d'autres modes de paiement comme PayPal, les virements, 
        le contre-remboursement ou une carte Discover ?
    </h3>
    <p class="contenu">Actuellement, les modes de paiement suivants sont acceptés sur Magnificent :</p>
    <p class="contenu">Visa, MasterCard, Maestro, American Express, virement bancaire, WebMoney, Yandex.Money, 
        Western Union, QIWI, DOKU, MercadoPago, Boleto, TEF, iDeal, Giropay, Sofort Banking, Alipay Balance,
        Carte Bancaire(Carte Blue), Przelewy24, paiement SMS en Russie 
        (MTC, MegaFon, Beeline, TELE2), espèces (Euroset, Syvaony, Russian Post) et Magnificent Pocket.
    </p>
    <p class="contenu">Tous les paiements effectués sur AliExpress sont versés au vendeur uniquement lorsque vous avez confirmé 
        la bonne réception de la commande et votre satisfaction. Veuillez ne pas transférer directement des paiements au vendeur. 
        Seules les transactions réalisées sur AliExpress sont couvertes par le programme Protection de l'acheteur. 
    </p>  
    <h3 class="title3">Que faire si mon paiement par carte a échoué ?</h3>  
    <p class="contenu">Si votre paiement a échoué, vérifiez les éléments suivants :</p>
    <p class="contenu"> Vérifiez que vous avez payé avec une carte Visa, MasterCard, Maestro (carte de débit) ou American Express.</p>
    <p class="contenu">. Lorsque vous réalisez des paiements sur AliExpress, vous devez avoir un code 3-D Secure activé. 
        Contactez votre banque pour vérifier que votre carte a été autorisée avec une authentification 3-D Secure.
    </p>
    <p class="contenu"> Si votre carte a expiré ou si votre paiement a dépassé la limite de votre carte, contactez l'émetteur de votre carte.</p>
    <p class="contenu"> Si vous avez reçu un avertissement d'erreur sur la page de paiement, consultez les informations de votre carte et réessayez de payer.
        Si cela ne fonctionne pas, vous pouvez essayer d'utiliser une autre carte ou un autre navigateur.
    </p>
    <?php
        include "footer.php";
    ?>
</body>
</html>