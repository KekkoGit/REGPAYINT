<div class="box-container">
   <label for="tipologia">Inserisci le offerte del tipo di Socio :</label>
      <select name="idTipologia" onchange="this.from.submit()">
      <?php include 'stabilireConn.php';
            $query = "SELECT idTipologia, nomeTipologia, quota FROM Tipologie"; // Replace 'nazioni' with your table name
            $result = $conn->query($query);
            
            // Check for query errors
            if (!$result) {
            echo "Errore non ci sono tipologie nel database: " . $db->error();
            exit();
            }else{
               while ($row = $result->fetch_assoc()) {
                  echo "<option value='" . $idTipologia=$row['idTipologia'] . "'>" . $row['nomeTipologia'] . " --> " . $row['quota'] ."€". "</option>";
               }
            }
            $conn->close();
         ?>
      </select>
   </label>
</div>