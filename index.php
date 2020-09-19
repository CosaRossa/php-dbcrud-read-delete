<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "dbhotel";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    return;
  }

  $sql = "

  ";

  // QUARTO PUNTO:
  // seleziona dalla tabella pagamenti le colonne id, status e price di tutti i pagamenti con price superiore a 600,
  // stampa il risultato in una lista non ordinata:
  // SELECT id, status, price
  // FROM pagamenti
  // WHERE price > 600

  // TERZO PUNTO:
  // elimina dalla tabella pagamenti la riga con pagante_id = 6 e con status = rejected:
  // DELETE
  // FROM pagamenti
  // WHERE pagante_id = 6 AND status LIKE 'rejected'

  // SECONDO PUNTO:
  // elimina dalla tabella pagamenti la riga con id 8:
  // DELETE
  // FROM pagamenti
  // WHERE id = 8

  // PRIMO PUNTO:
  // seleziona tutto dalla tabella pagamenti e stampa il risultato in una lista ordinata:
  // SELECT  *
  // FROM pagamenti

  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
  // output data of each row

    // QUARTO PUNTO:
    // echo "<ul>";
    // while($row = $result->fetch_assoc()) {
    //   echo "<li>" . $row["id"] . " " . $row["status"] . " " . $row["price"] . "€" . "</li>";
    // }
    // echo "</ul>";

    // PRIMO PUNTO:
    // echo "<ol>";
    // while($row = $result->fetch_assoc()) {
    //   echo "<li>" . $row["id"] . " " . $row["status"] . " " . $row["price"] . " " . $row["prenotazione_id"] . " " . $row["pagante_id"] . " " . $row["created_at"] . "</li>";
    // }
    // echo "</ol>";
  }

  elseif ($result) {
    echo "0 results";
  }

  else {
    echo "query error";
  }

  $conn->close();

?>
