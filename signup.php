<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sign Up</title>
    <style>
    <?php 
      include "signup.css";
      include "navbar.css";
      include "footer.css";
    ?>
  </style>
</head>
<body>

<?php 

  require_once "config/connexion.php";

  $firstName = $lastName = $email = $password = $repeatPassword = "";
  $firstName_err = $lastName_err = $email_err = $password_err = $repeatPassword_err = "";

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["firstName"])){
      $firstName_err = "Prénom est obligatoire";
    }
    else{
      $firstName = test_input($_POST["firstName"]);
    }
    if(empty($_POST["lastName"])){
      $lastName_err = "Nom est obligatoire";
    }
    else{
      $lastName = test_input($_POST["lastName"]);
    }
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
      $number = preg_match('@[0-9]@', $password);
      $uppercase = preg_match('@[A-Z]@', $password);
      $lowercase = preg_match('@[a-z]@', $password);
      if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase) {
        $password_err = "Le mot de passe doit contenir au minimum 8 caractères, au moins une lettre minuscule et une lettre majuscule, un caractère spécial et un chiffre.";
      } else {
        $password_val = "Mot de passe fort.";
      }
      $result = mysqli_query($link,"SELECT * FROM utilisateur where email='".$email."'");
      $num_rows = mysqli_num_rows($result);
      if($num_rows >= 1){
        $password_err = "email exist";
      }
    }
    if(empty($_POST["repeatPassword"])){
      $repeatPassword_err = "Répéter mot de passe est obligatoire";
    }
    else{
      $repeatPassword = test_input($_POST["repeatPassword"]);
    }
    if($password != $repeatPassword){
      $repeatPassword_err = "Incorrect";
    }
    if(empty($firstName_err) && empty($lastName_err) && empty($email_err) && empty($password_err) && empty($repeatPassword_err)){
      // Prepare an insert statement
      $sql = "INSERT INTO utilisateur (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
       
      if($stmt = mysqli_prepare($link, $sql)){
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "ssss", $param_firstName, $param_lastName, $param_email, $param_password);
          
          // Set parameters
          $param_firstName = $firstName;
          $param_lastName = $lastName;
          $param_email = $email;
          $param_password = $password;

          // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt)){
            // Records updated successfully. Redirect to landing page
            header("location: index.php");
            exit();
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }
      }
       
      // Close statement
      mysqli_stmt_close($stmt);
  }
  
  // Close connection
  mysqli_close($link);
  }
?>

  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container justify-content-between w-75">
    <!-- Left elements -->
    <div class="d-flex">
        <!-- Brand -->
        <div class="navbar-brand me-2 mb-1 d-flex align-items-center">
            <a class="text-decoration-none" href="#"><p class="h2 text-center mb-0" style="font-family: 'Meie Script', cursive; color: #e24141;">Magnificent</p>
            <p class="text-center" style="color: #FF860D;">CLOTHING STORE</p></a>
        </div>
    </div>
    <!-- Left elements -->

    <!-- Center elements -->
    <!-- Search form -->
    <div class="d-flex search" style="width: 550px;">
        <form class="input-group my-auto d-sm-flex w-100">
            <input
                autocomplete="off"
                type="search"
                class="form-control border border-1 border-dark rounded in-search"
                placeholder="Que cherchez-vous..."
                style="min-width: 125px;"
            />
            <button class="btn input-group-text d-lg-flex but-search" style="background-color: #ee6a6a; color: rgb(59, 54, 54);"
                ><i class="fas fa-search" style=" padding-left: 6px;"></i
            ></button>
        </form>
    </div>
    <!-- Center elements -->

    <!-- Right elements d-none d-sm-flex-->
    <ul class="navbar-nav flex-row ">
        <li class="nav-item me-3 me-lg-1 pr-3 bg-light icon">
        <a class="nav-link" href="login.php">
            <i class="bi bi-person fa-2x"></i>
        </a>
        </li>
        <li class="nav-item mr-lg-1 bg-light icon">
            <a class="nav-link" href="#">
                <i class="bi bi-cart2 fa-2x"></i>
                <span class="badge rounded-pill badge-notification" style="background-color: #ee6a6a; color: rgb(59, 54, 54);">0</span>
            </a>
        </li>
        <li class="nav-item me-3 me-lg-1 pl-3 bg-light icon">
            <a class="nav-link" href="#">
                <i class="bi bi-suit-heart fa-2x"></i>
                <span class="badge rounded-pill badge-notification" style="background-color: #ee6a6a; color: rgb(59, 54, 54);">0</span>
            </a>
        </li>
    </ul>
    <!-- Right elements -->
    </div>
</nav>
<!-- Navbar -->

    <div class="m-auto bg-light" id="signup-div">
        <div class="w-75 m-auto py-5">
            <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <!-- FirstName input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="registerFirstName">Prénom</label>
                <input type="text" name="firstName" id="registerFirstName" value="<?php echo $firstName;?>"class="form-control border border-1" />
                <span style="color: #FF0000;"><?php echo $firstName_err; ?></span>
            </div>
        
            <!-- LastName input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="registerLastName">Nom</label>
                <input type="text" name="lastName" id="registerLastName" value="<?php echo $lastName;?>" class="form-control border border-1" />
                <span style="color: #FF0000;"><?php echo $lastName_err; ?></span>
            </div>
        
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="registerEmail">Email</label>
                <input type="email" name="email" id="registerEmail" value="<?php echo $email;?>" class="form-control border border-1" />
                <span style="color: #FF0000;"><?php echo $email_err; ?></span>
            </div>
        
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="registerPassword">Mot de passe</label>
                <input type="password" name="password" id="registerPassword" class="form-control border border-1" />
                <span style="color: #FF0000;"><?php echo $password_err; ?></span>
            </div>
        
            <!-- Repeat Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="registerRepeatPassword">Répéter le mot de passe</label>
                <input type="password" name="repeatPassword" id="registerRepeatPassword" class="form-control border border-1" />
                <span style="color: #FF0000;"><?php echo $repeatPassword_err; ?></span>
            </div>
        
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                aria-describedby="registerCheckHelpText" />
                <label class="form-check-label" for="registerCheck">
                J'ai lu et j'accepte les conditions d'utilisation 
                </label>
            </div>
        
            <!-- Submit button -->
            <button type="submit" class="btn w-100 mb-3" style="background-color: #ee6a6a;">S'INSCRIRE</button>
        
            <p class="text-center">ou:</p>

            <div class="text-center mb-3">
                <p>S'inscrire avec':</p>
                <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
                <i class="fab fa-facebook-f"></i>
                </button>
        
                <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
                <i class="fab fa-google"></i>
                </button>
        
                <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
                <i class="fab fa-twitter"></i>
                </button>
        
                <button type="button" class="btn btn-link btn-floating mx-1 social-icon">
                <i class="fab fa-github"></i>
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Vous avez déjà un compte? <a class="text-black" href="login.php">Se connecter</a></p>
                </div>
            </div>
            </form>
        </div>
      </div>
      <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 footer-icon"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 footer-icon"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 footer-icon"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 footer-icon"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 footer-icon"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 footer-icon"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
    
          <!-- Grid container -->
          <div class="container p-4">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase text-dark">about us</h5>
    
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark dec">About Magnificent.com</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">About Magnificent Group</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">Sitemap</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0 text-dark">Customer Services</h5>
    
                <ul class="list-unstyled">
                  <li>
                    <a href="#!" class="text-dark dec">Help Center</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">Report Abuse</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">Submit a Dispute</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">Policies & Rules</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase text-dark">payment</h5>
    
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark dec">Payment Methods</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">Payment To Shipping</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase text-dark">help</h5>
    
                <ul class="list-unstyled">
                  <li>
                    <a href="#!" class="text-dark dec">FAQs</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">Bonus Point</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark dec">Member's Advantages</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Grid container -->
        </div>
      
        <!-- Copyright -->
        <div class="container-fluid text-center text-dark p-3 mx-0" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright:
          <a class="text-dark dec" href="https://mdbootstrap.com/">Magnificent.com</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>