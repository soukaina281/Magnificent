<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Meie+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>FAQs</title>
    <style>
      <?php 
        include "bootstrap-icons.css";
        include "bootstrap.min.css";
        include "all.css";
        include "faqs.css";
        include "footer.css";
        include "navbar.css";
      ?>
    </style>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <h1 class="title">vos fréquentes questions</h1>
       <div class="list"> 
       <ul><li><a href="#part1">QUE DOIS-JE FAIRE SI J’AI OUBLIÉ MON MOT DE PASSE?</a></li>
        <li><a href="#part2">COMMENT PUIS-JE CHANGER MON MOT DE PASSE?</a></li>
        <li><a href="#part3">COMMENT PUIS-JE CHANGER MON ADRESSE E-MAIL?</a></li>
        <li><a href="#part4">POURQUOI EST-CE QUE JE RENCONTRE DES PROBLÈMES LORS DE LA SAISIE DE MES INFORMATIONS DE PAIEMENT ?</a></li>
        <li><a href="#part5">COMMENT PUIS-JE ME DÉSABONNER DE VOTRE NEWSLETTER ?</a></li>
        <li> <a href="#part6">COMMENT PUIS-JE MODIFIER MON ADRESSE DE LIVRAISON ENREGISTRÉE ?</a></li>
        <li><a href="#part7">COMMENT PUIS-JE MODIFIER MES INFORMATIONS DE PAIEMENT ENREGISTRÉES ?</a></li></ul> </div>
        <div>
            <div class="contenu">
                <h3 class="title3">QUE DOIS-JE FAIRE SI J’AI OUBLIÉ MON MOT DE PASSE?</h3>
                <p  id="part1">Lors de la connexion, cliquez sur l’option « mot de passe oublié » et suivez les étapes pour réinitialiser. 
                Malheureusement, en raison des lois GDPR, nous ne sommes plus en mesure de réinitialiser manuellement votre mot de passe,
                 donc si vous rencontrez des problèmes pour recevoir votre e-mail de réinitialisation de mot de passe, veuillez vérifier votre spam et vos courriers indésirables et réessayer.
                 Notre équipe du service à la clientèle ne sera pas en mesure de le renvoyer ou de modifier votre mot de passe.</p></div>
           <div class="contenu">
            <h3 class="title3">COMMENT PUIS-JE CHANGER MON MOT DE PASSE?</h3>   
            <p  d="part2">Besoin de changer votre mot de passe? Connectez-vous à l’aide de votre mot de passe actuel, suivez les étapes sous Informations sur le compte.
                 Vous avez oublié votre mot de passe? Lors de la connexion, cliquez sur l’option « mot de passe oublié » et suivez les étapes pour réinitialiser.
                  Malheureusement, en raison des lois GDPR, nous ne sommes plus en mesure de réinitialiser manuellement votre mot de passe, donc si vous rencontrez des problèmes pour recevoir votre e-mail de réinitialisation de mot de passe,
                   veuillez vérifier votre spam et vos courriers indésirables et réessayer.
                 Notre équipe du service à la clientèle ne sera pas en mesure de le renvoyer ou de modifier votre mot de passe.</p></div> 
           <div class="contenu">
            <h3 class="title3">COMMENT PUIS-JE CHANGER MON ADRESSE E-MAIL?</h3>   
            <p  id="part3">C’est super simple! Connectez-vous simplement à votre compte en utilisant votre ancienne adresse e-mail et cliquez sur « modifier l’adresse e-mail / mot de passe » sous 
            Mes informations Une fois ces modifications effectuées, appuyez sur Continuer et vos modifications seront enregistrées!</p></div> 
            <div class="contenu">
                <h3 class="title3"> POURQUOI EST-CE QUE JE RENCONTRE DES PROBLÈMES LORS DE LA SAISIE DE MES INFORMATIONS DE PAIEMENT ?</h3>
                <p  id="part4">Il s’agit d’une option de paiement 3D Secure que certaines banques utilisent. 3D Secure est une couche de sécurité supplémentaire pour les achats par carte de crédit et de débit en ligne.
             Si vous rencontrez des problèmes ou oubliez des informations, veuillez contacter votre banque.</p></div> 
           <div class="contenu">
            <h3 class="title3">COMMENT PUIS-JE ME DÉSABONNER DE VOTRE NEWSLETTER ?</h3>   
            <p  id="part5">Appuyez simplement sur le bouton « Se désabonner » au bas de la newsletter par e-mail.</p></div> 
            <div class="contenu">
                <h3 class="title3">COMMENT PUIS-JE MODIFIER MON ADRESSE DE LIVRAISON ENREGISTRÉE ?</h3>
                <p  id="part6">Connectez-vous simplement à votre compte et cliquez sur l’option « adresses ». De là, vous pouvez en créer un nouveau ou en modifier un existant.</p></div> 
            <div class="contenu">
                <h3 class="title3">COMMENT PUIS-JE MODIFIER MES INFORMATIONS DE PAIEMENT ENREGISTRÉES ?</h3>
                <p  id="part7">Connectez-vous simplement à votre compte et cliquez sur l’option 
                « Détails de paiement » et ajoutez, supprimez ou modifiez vos options de paiement.</p></div> 
        </div>
        <?php
            include "footer.php";
        ?>
</body>
</html>