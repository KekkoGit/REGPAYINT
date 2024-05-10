
<h2><button type="submit" name="submit" class="button">Accedi &nbsp; <img src="img/login.png" Style="width:50px; height:auto"></button></h2>
<?php 
/* La tabella che abbiamo nel db
CREATE TABLE Iscritti (
    email VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(40) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    nome VARCHAR(30) NOT NULL,
    dataNascita DATE NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    idSigla VARCHAR(2) NOT NULL REFERENCES Nazioni(idSigla),
    idTipologia INT NOT NULL REFERENCES Tipologie(idTipologia),
    idIscritto int AUTO_INCREMENT PRIMARY KEY
    );
*/
include 'stabilireConn.php';

if(isset($_POST["submit"])) {
    // Recupera l'email dall'input del modulo e rimuove eventuali spazi vuoti
    $email = trim($_POST["email"]);

    // Query per verificare se l'email esiste già nel database
    $email_esisteAccount_query = "SELECT 1 FROM iscritti WHERE email = '$email'";
    $verifica = $conn->query($email_esisteAccount_query);

    if($verifica) {
        // Se la query è stata eseguita correttamente
        if($verifica->num_rows > 0) {
            // L'account esiste già
            echo "Account già esistente con email: $email";
            exit();
        } else {
            // L'account non esiste. Procedi con l'inserimento dei dati dell'account nel database
            $password = $_POST["password"];
            $cognome = $_POST["cognome"];
            $nome = $_POST["nome"];
            $dataNascita = $_POST["dataNascita"];
            $telefono = $_POST["telefono"]; // Corretto da $_POST["dataNascita"]
            $idSigla = $_POST["idSigla"];
            $idTipologia = $_POST["idTipologia"];

            // Hashing della password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Query per inserire i dati del nuovo account nel database
            $creaAccountQuery = "INSERT INTO `iscritti`(`email`, `password`, `cognome`, `nome`, `dataNascita`, `telefono`, `idSigla`, `idTipologia`) VALUES ('$email','$hashed_password','$cognome','$nome','$dataNascita','$telefono','$idSigla','$idTipologia')";
            $result = $conn->query($creaAccountQuery);

            if ($result === TRUE) {
                // Inserimento dell'account avvenuto con successo
                echo "Benvenuto $nome, hai creato con successo un account con l'email: $email";
                $idIscritto = $conn->insert_id;
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['idIscritto'] = $idIscritto;
            } else {
                // Errore durante l'inserimento dell'account nel database
                echo "Errore durante la creazione dell'account: " . $conn->error;
            }
        }
    } else {
        // Errore durante l'esecuzione della query
        echo "Errore durante la verifica dell'esistenza dell'account: " . $conn->error;
    }
}
?>




                