<?php
session_start();
include_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $phone_number = $_POST['phone_number'];

    $sql = "INSERT INTO kids (firstname, surname, phone_number) VALUES ('$firstname', '$surname', '$phone_number')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success_message'] = "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Redirect to the same page to clear the form
    header("Location: ../Register.php");
    exit();
}

mysqli_close($conn);
?>
