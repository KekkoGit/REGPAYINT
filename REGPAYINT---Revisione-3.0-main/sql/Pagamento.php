<?php session_start();
    if(isset($_POST["submit"])){
        include "stabilireConn.php"; //dati per stabilire la connesione al server
        //Dati:
        $idIscritto = $_SESSION['idIscritto']; //ricupero dalla sessione l’idIscritto
        $importo = $_POST["importo"];
        $dataImporto = $_POST["dataImporto"];
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
