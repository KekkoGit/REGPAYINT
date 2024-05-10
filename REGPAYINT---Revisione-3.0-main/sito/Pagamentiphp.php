
<br/><br/>
   <div class="col-sm-8 text-left"><form action = "<?php echo $_SERVER["PHP_SELF"];  ?>" method="post">
   <h1>
      <label for="email">Importo: &nbsp; </label>
         <input type="text" name="importo" placeholder="Inserisci quanto vuoi versare" id="importo" required="submit">
      <br>
</div>

<?php

/*
CREATE TABLE Pagamenti (
    idPagamento INT AUTO_INCREMENT PRIMARY KEY,
    idIscritto INT NOT NULL REFERENCES Iscritti(idIscritto),
    dataPagamento DATE NOT NULL,
    importo DECIMAL(30) NOT NULL
    TipologiaImporto VARCHAR()
   );
*/

if(isset($_POST["submit"])){
        include "stabilireConn.php"; //dati per stabilire la connesione al server
        //Dati:
        $idIscritto = $_SESSION['idIscritto']; //ricupero dalla sessione l’idIscritto
        $importo = $_POST["importo"];
        $dataPagamento= date();
        //Preparazione della interrogazione
        $sql = "INSERT INTO Pagamenti (idIscritto, dataPagamento, importo) 
        VALUES ($idIscritto, $dataImporto, $importo);"; 
        //Invio della query
        $query = $conn->query($sql);
        if($query) echo "<b>Iscrizione avvenuta correttamente</b><br><br>";

        else echo "<b>Errore nell'inserimento della iscrizione</b><br><br>" ;
        }
        $mysqli->close();
?>