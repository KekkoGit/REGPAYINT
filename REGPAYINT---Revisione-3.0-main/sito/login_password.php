<?php  include "HeadPage.php";?>
<!DOCTYPE html>
<html lang="it">

  <head>
    <title>Iscrizione / Registrazione</title>
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
        <?php include 'passwordLabel.php'; ?>
      </div>
      
      <div>
      <h2><button type="submit" name="submit" class="button">Accedi &nbsp; <img src="img/login.png" Style="width:50px; height:auto"></button></h2>
      <?php
      if (!isset($_SESSION["email"])) {
        // Sessione email non impostata, reindirizza a login_email.php
        header("Location: login_email.php");
        exit();
      }

      include 'stabilireConn.php';

        if(isset($_POST["submit"])) {
            // Recupera l'email dalla sessione
            $email = $_SESSION["email"];
            $password = $_POST["password"];

            // Query per recuperare la password hashata dal database
            $password_query = "SELECT password FROM iscritti WHERE email = '$email'";
            $result_password = $conn->query($password_query);
            
            if ($result_password) {
                // Se la query è stata eseguita correttamente
                if ($result_password->num_rows > 0) {
                    // Se è stata trovata una corrispondenza per l'email nel database
                    $row = $result_password->fetch_assoc();
                    $hashed_password_db = $row["password"];
                    
                    // Verifica se la password fornita corrisponde alla password nel database
                    if (password_verify($password, $hashed_password_db)) {
                        // Accesso effettuato con successo
                        echo "Benvenuto $nome, hai effettuato l'accesso con successo. La tua email è: $email";
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['idIscritto'] = $idIscritto;
                        header("Location: home.php");
                        exit();
                    } else {
                        // Password errata
                        echo "La password fornita non è corretta. Riprova.";
                    }
                } else {
                    // Nessuna corrispondenza trovata per l'email nel database
                    echo "Nessun account trovato con l'email fornita.";
                }
            } else {
                // Errore durante l'esecuzione della query
                echo "Errore durante il recupero della password dal database: " . $conn->error;
            }
        }
      ?>
      </div>
   
         <h1><a href="#">Dimenticato la password?</a>
         <a href="RegistrazioneAccount">Registrati</a>
        </h1>
      </p>

   </form> 

   <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
   <center>
   <section>
   <button type="button" name="logout" class="button"><a href="logout.php">Logout</a></button>
   </center>
   </div>
</form>

<?php include "FooterPage.php";?>

</body>
</html>

