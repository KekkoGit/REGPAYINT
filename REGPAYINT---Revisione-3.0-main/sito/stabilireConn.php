<?php
// Dati per stabilire la connessione
$db_host = "localhost:3306";
$db_username = "root@";
$db_password = "root";
$db_database = "regpayint";

// Creare la connessione
try {
    $conn = new mysqli($db_host, $db_username, $db_password, $db_database);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
} catch (mysqli_sql_exception $e) {
    die("Errore: " . $e->getMessage());
}
?>
