<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $country = $_POST["country"];

    $errors = [];

    if (empty($username) || strlen($username) < 3 || strlen($username) > 15) {
        $errors[] = "Gebruikersnaam moet tussen 3 en 15 tekens lang zijn.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Voer een geldig e-mailadres in.";
    }
    if (empty($password) || strlen($password) < 6) {
        $errors[] = "Wachtwoord moet minimaal 6 tekens bevatten.";
    }
    if (empty($gender)) {
        $errors[] = "Selecteer een geslacht.";
    }
    if (empty($country)) {
        $errors[] = "Selecteer een land.";
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<p><a href='index.html'>Terug naar formulier</a></p>";
    } else {
        $_SESSION["username"] = $username;
        header("Location: welkom.php");
        exit();
    }
} else {
    echo "Ongeldige aanvraag.";
}
?>
