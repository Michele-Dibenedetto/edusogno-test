<?
include_once "../db/connectionDB.php";
$nome = $_POST["name"];
$cognome = $_POST["surname"];
$email = $_POST["email"];
$inbox_email = "https://generator.email/" . $email;
$sqlUtenti = "INSERT INTO utenti (nome, cognome, email, inbox_email)
VALUES ('$nome', '$cognome', '$email', '$inbox_email')";
if ($conn->query($sqlUtenti) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$nome_evento = $_POST["name_event"];
$descrizione = $_POST["description"];
$data = $_POST["date"];
$ora = $_POST["hour"] . ":00";
$sqlEventi = "INSERT INTO evento (nome_evento, descrizione, data_evento, ora_evento)
VALUES ('$nome_evento', '$descrizione', '$data', '$ora')";
if ($conn->query($sqlEventi) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sqlEventi . "<br>" . $conn->error;
  }
$conn->close();
?>