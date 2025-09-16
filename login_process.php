<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'club_management');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// LOGIN USER
$errors = array();

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        // if your users table stores md5 hashed passwords:
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";

        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: final_page_2.php'); // redirect after login
            exit();
        } else {
            echo "<p style='color:red; text-align:center;'>Wrong username/password combination</p>";
        }
    }
}
?>
