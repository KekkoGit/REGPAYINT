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
  </head>
    <body>
   <br/><br/>
   
      <form action = "<?php echo $_SERVER["PHP_SELF"];  ?>" method="post">
   <h2><b>Benvenuto nel </b></h2> 
      <h2><span class="titolo"><span class="multicolortextGoogle"><b>INFO Utente</b></span></span></h2>
      <?php
        $email = $_SESSION['email'];
        $id = $_SESSION['idIscritto'];
        $email = $_SESSION['email'];
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

