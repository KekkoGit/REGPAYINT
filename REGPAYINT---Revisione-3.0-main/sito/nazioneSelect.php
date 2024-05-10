<div class="box-container">
<label for="nazione">Nazione di residenza</label>
<br>
      <select name="idSigla" onchange="this.from.submit()">
      <option value="">Afghanistan</option>
      <option value="">Albania</option>
      <option value="">Algeria</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      <option value="">Seleziona Nazione</option>
      </div><br></br>
      <?php include 'stabilireConn.php';
            $query = "SELECT idSigla, nomeNazione FROM Nazioni";
            $result = $conn->query($query);
            
            if (!$result) {
              echo "Errore non ci sono nazioni nel database: " . $db->error();
              exit();
            }else{
               while ($row = $result->fetch_assoc()) {
                  echo "<option value='" . $row['idSigla'] . "'>". $row['idSigla'] . "->" . $row['nomeNazione'] ."</option>";
                }
            }
            $conn->close();
         ?>
</select>