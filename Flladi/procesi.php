<?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "detyra";

// Krijoni lidhjen me bazën e të dhënave
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
if (!$conn) {
    die("Lidhja me bazën e të dhënave dështoi: " . mysqli_connect_error());
}

// Marrja e të dhënave nga forma
$cardholder_name = $_POST['cardholder'];
$valid_thru = $_POST['date'];
$cvv = $_POST['verification'];
$card_number = $_POST['cardnumber'];

// SQL query për të shtuar të dhënat në tabelën e bazës së të dhënave
$sql = "INSERT INTO tabela_emri (cardholder_name, valid_thru, cvv, card_number)
VALUES ('$cardholder_name', '$valid_thru', '$cvv', '$card_number')";

if ($conn->query($sql) === TRUE) {
  echo "Të dhënat janë ruajtur me sukses në bazën e të dhënave.";
} else {
  echo "Gabim gjatë ruajtjes në bazën e të dhënave: " . $conn->error;
}

$conn->close();
?>
