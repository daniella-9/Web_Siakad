<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $google_id = $_SESSION['google_id'];

    // Store the username, password, and Google ID in the database
    $query = "INSERT INTO user (username, password, google_id) VALUES ('$username', '$password', '$google_id')";
    $query_run = mysqli_query($konek, $query);

    if ($query_run) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "Registration failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Account Registration</title>
</head>
<body>
    <h2>Register with Google Account</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
