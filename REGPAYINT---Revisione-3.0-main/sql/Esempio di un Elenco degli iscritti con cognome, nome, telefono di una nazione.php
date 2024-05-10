<?php
//Esempio di un Elenco degli iscritti con cognome, nome, telefono di una nazione:
    if(isset($_POST["submit"])){
        include "stabilireConn.php"; //dati per stabilire la connesione al server
        //Dati:
        $nazione = $_POST["nazione"];
        //Preparazione della interrogazione
        $sql = "SELECT cognome, nome, telefono FROM Iscritti WHERE nazione = '$nazione';";
        //Invio della query
        $query = $conn->query($sql);

        if ($query->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Cognome</th><th>Nome</th><th>Telefono</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['cognome'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else echo "Non ci sono iscritti in questa Nazione";
        $mysqli->close();
    }

?>
