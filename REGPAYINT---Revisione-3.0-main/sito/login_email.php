<?php  include "HeadPage.php";?>
<!DOCTYPE html>
<html lang="it">

  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet" href="css/img.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/cssMulticolor.css">
    <link rel="stylesheet" href="css/dark-date-picker.css">
    <link rel="stylesheet" href="css/cssButton.css">
    <script src="script.js"></script>
    <style>
   body {
    background-image: url('img/sfondo.jpg');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-blend-mode: overlay;
    background-attachment: fixed;
  }
      </style>
  </head>
    <body>
   <br/><br/>
   
      <form action = "<?php echo $_SERVER["PHP_SELF"];  ?>" method="post">
   <h2><b>Benvenuto nel </b></h2> 
      <h2><span class="titolo"><span class="multicolortextGoogle"><b>LOGIN</b></span></span></h2>
      <br></br>
      <div class="container"> 
         <h4>
         <div class="box-container">
            <label for="email">Email</label>
               <input type="text" name="email" placeholder="Email" id="email" required="submit">
         </div><br></br>
         <div class="box-container">
            <label for="email">Password</label>
               <input type="text" name="password" placeholder="Password" id="email" required="submit">
         </div><br></br>
      </h4>
      </div>
      
      <div>
      <h2><button type="submit" name="submit" class="button">Invia &nbsp; <img src="img/login.png" Style="width:50px; height:auto"></button></h2>
      <?php
         if(isset($_POST["submit"])) {
            // Verifica se l'email esiste già nel database
            $email = $_POST["email"];
            $email_esisteAccount_query = "SELECT 1 FROM iscritti WHERE email = '$email'";
            
            // Esegui la query solo se la connessione al database è stata stabilita correttamente
            if ($conn) {
               $verifica = $conn->query($email_esisteAccount_query);
               
               if($verifica) {
                  if($verifica->num_rows > 0) {
                        // L'account esiste
                        echo "Account esistente con email: $email";
                        $_SESSION["email"] = $email;
                        $_SESSION['timeout'] = time();
                        header("Location: login_password.php");
                        exit();
                  } else {
                        // L'account non esiste.
                        echo "Abbiamo trovato un account associato all'email $email. Riprova";
                  }
               } else {
                  echo "Errore durante l'esecuzione della query: " . $conn->error;
               }
            } else {
               echo "Connessione al database non riuscita";
            }
         }
      ?>
      </div>
   

         <h2><a href="RegistrazioneAccount.php"> Non hai ancora un account? Registrati ora!</a>
        </h2>
      </p>

   </form> 


   <!--
   <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
   <div class="col-sm-8 text-left">
   <section>
   <button type="button" name="logout" class="button"><a href="logout.php">Logout</a></button>
</section>
   </div>

</form>
   -->

<?php include "FooterPage.php";?>

</body>
</html>

