<?php
// Konektimi me databazën MySQL
$conn = mysqli_connect("localhost", "root", "", "detyra");

// Kontrolli i lidhjes
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Marrja e të dhënave të postuara
$username = $_POST['username'];
$password = md5($_POST['password']);

// Query për të shtuar një përdorues të ri në bazën e të dhënave
$sql = "INSERT INTO klienti (emri, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    // Ekzekuto kodin JavaScript për t'i shfaqur përdoruesit një mesazh popup
    echo "<script>alert('Registration successful!'); window.location = 'login.html';</script>";
    exit; // Ndalo ekzekutimin e kodit PHP pasi që kemi përfunduar
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>