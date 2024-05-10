<?php session_start();
if(isset($_POST["submit"])){
    include "stabilireConn.php"; //dati per stabilire la connesione al server 
    //Dati:
    $cognome = $_POST["cognome"];
    $nome = $_POST["nome"];
    $telefono = $_POST["telefono"];
    $nazione = $_POST["nazione"];
    $tipologia = $_POST["tipologia"];
    $dataIscrizione = $_POST["dataIscrizione"];
//Preparazione della interrogazione
$sql = "INSERT INTO Iscritti (cognome, nome, telefono, nazione, tipologia, dataIscrizione) VALUES ('$cognome', '$nome', '$telefono', '$nazione', '$tipologia', '$dataIscrizione');"; 
//Invio della query
$query = $conn->query($sql);
if($query){
 echo "<b>Iscrizione avvenuta correttamente</b><br><br>";
	$idIscritto = $mysqli->insert_id;	
//Restituisce l'ID generato da una query INSERT o UPDATE su una tabella con una colonna avente l' AUTO_INCREMENT attributo fonte: https://www.php.net/manual/it/mysqli.insert-id.php poi utilizzo la sessione startata per salvare l’id che mi servirà per il pagamento (anche se avrei fatto diversamente ma dovrei cambiare le tabelle e dovrei creare proprio un account per ogni iscritto, infatti questo è solo un esempio

$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();
$_SESSION['idIscritto'] = $_POST['$idIscritto'];
}else echo "<b>Errore nell'inserimento della iscrizione</b><br><br>";

$mysqli->close();
}

?>

