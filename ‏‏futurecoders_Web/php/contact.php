<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $file = fopen("messages.txt", "a") or die("Unable to open file!");

    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n---\n");

    fclose($file);

    header("Location: ../thanks.html");
    exit();
}
?>

