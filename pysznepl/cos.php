<?php
// Dane do połączenia z bazą danych MySQL
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'formularz';

// Połączenie z bazą danych
$conn = mysqli_connect($host, $username, $password, $database);

// Sprawdzenie połączenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sprawdzenie, czy formularz został przesłany
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobranie danych z formularza
    $imie = mysqli_real_escape_string($conn, $_POST['imie']);
    $nazwisko = mysqli_real_escape_string($conn, $_POST['nazwisko']);
    $adres = mysqli_real_escape_string($conn, $_POST['adres']);
    $numer_karty = mysqli_real_escape_string($conn, $_POST['numer_karty']);
    $data_waznosci_karty = mysqli_real_escape_string($conn, $_POST['data_waznosci']);

    // Wstawienie danych do bazy danych
    $query = "INSERT INTO zamowienia (imie, nazwisko, adres, numer_karty, data_waznosci_karty) 
              VALUES ('$imie', '$nazwisko', '$adres', '$numer_karty', '$data_waznosci_karty')";

    if (mysqli_query($conn, $query)) {
        // Komunikat po pomyślnym zapisie
        header("Location: welcome.php");
    } else {
        // Komunikat w przypadku błędu
        echo 'Błąd: ' . mysqli_error($conn);
    }
    
    // Zamknięcie połączenia z bazą danych
    mysqli_close($conn);
}
?>
