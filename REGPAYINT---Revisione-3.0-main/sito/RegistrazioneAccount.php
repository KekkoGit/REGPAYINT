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
   <h2><b>Benvenuto nella </b></h2> 
      <h2><span class="titolo"><span class="multicolortextGoogle"><b>REGISTRAZIONE</b></span></span></h2>
      <br></br>
      <div class="container"> 
         <h4>
         <div class="box-container">
            <label for="nome">Nome </label>
               <input type="text" name="nome" placeholder="Nome" id="nome" required="submit">
               <script>
const input = document.getElementById('nome');

input.addEventListener('keydown', function(event) {
    if (event.key >= '0' && event.key <= '9') {
        event.preventDefault(); // Impedisce la digitazione del numero
    }
});
</script>
         </div><br>
         <div class="box-container">
            <label for="nome">Cognome</label>
               <input type="text" name="cognome" placeholder="Cognome" id="cognome" required="submit">
         </div><br>
         <div class="box-container">
            <label for="email">Email</label>
               <input type="text" name="email" placeholder="luca.rossi@example.com" id="email" required="submit">
         </div><br>
         <div class="box-container">
            <label for="nome">Telefono</label>
               <input type="text" name="numeroTelefono" placeholder="Numero di Telefono" id="numeroTelefono" required="submit">
         </div><br>
         <div class="box-container">
            <label for="dataNascita">Data di nascita</label>
            <input type="date" id="dataNascita" placeholder="Inserisci il tua data di nascita" name="dataNascita">
         </div>
            <br>
      <?php include 'nazioneSelect.php';?>
      <br></br>
      <?php include 'tipologiaSelect.php';?>
      <br></br>

      <?php include 'passwordLabel.php'; ?>

      </h4>
      </div>
      
      <div>
         <?php include 'queryRegistrazioneAccount.php';?>
      </div>
   
         <h1><a href="#">Hai dimenticato la password?</a>
         <a href="Login_email">Effettua il Login</a>
         </h1>
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

