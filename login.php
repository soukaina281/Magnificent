<?php 
  session_start();
  require_once "config/connexion.php";

  $email = $password = "";
  $email_err = $password_err = "";
  $password_val = "";

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["email"])){
      $email_err = "Email est obligatoire";
    }
    else{
      $email = test_input($_POST["email"]);
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_err = "Email format est invalid";
      }
    }
    if(empty($_POST["password"])){
      $password_err = "Mot de passe est obligatoire";
    }
    else{
      $password = test_input($_POST["password"]);
    }
    if(empty($email_err && empty($password_err)))
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              email = '".$email."' and password = '".$password."' ";
        $exec_requete = mysqli_query($link,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           session_start();
           $_SESSION['email'] = $email;
           header('Location: home.php');
        }
        else
        {
          $password_err = "utilisateur ou mot de passe incorrect";
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Meie+Script&display=swap" rel="stylesheet">
    <title>Sign In</title>
    <style>
      <?php 
        include "bootstrap-icons.css";
        include "bootstrap.min.css";
        include "all.css";
        include "login.css";
        include "navbar.css";
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

  <div class="m-auto bg-light" id="login-div">
    <div class="w-75 m-auto py-5">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="loginName">Identifiant</label>
          <input type="email" id="loginName" name="email" value="<?php echo $email;?>" class="form-control border border-1" />
          <span style="color: #FF0000;"><?php echo $email_err; ?></span>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="loginPassword">Mot de passe</label>
          <input type="password" id="loginPassword" name="password" class="form-control border border-1"/>
          <span style="color: #FF0000;"><?php echo $password_err; ?></span>
        </div>

        <!-- 2 column grid layout -->
        <div class="row mb-4">
          <div class="col-md-6 d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check mb-3 mb-md-0">
              <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
              <label class="form-check-label" for="loginCheck"> Se souvenir de moi </label>
            </div>
          </div>
  
          <div class="col-md-6 d-flex justify-content-center">
            <!-- Simple link -->
            <a class="text-black" href="#!">Mot de passe oublié?</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn w-100 mb-4" style="background-color: #ee6a6a;">SE CONNECTER</button>
  
        <p class="text-center">ou:</p>

        <div class="text-center mb-3">
          <p>Se connecter avec:</p>
          <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
            <img class="m-icon" src="icons/facebook.svg" alt=""/>
          </button>
  
          <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
            <img class="m-icon" src="icons/google.svg" alt=""/>
          </button>
  
          <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
            <img class="m-icon" src="icons/twitter.svg" alt=""/>
          </button>
  
          <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
            <img class="m-icon" src="icons/github.svg" alt=""/>
          </button>
        </div>

        <!-- Register buttons -->
        <div class="text-center">
          <p>Vous n'avez pas de compte? <a class="text-black" href="signup.php">S'inscrire</a></p>
        </div>
      </form>
    </div>
  </div>
  <?php
      include "footer.php";
    ?>
</body>
</html>