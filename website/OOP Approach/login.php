<?php
session_start();
require "User.php";
$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($user->login($_POST["username"], $_POST["password"])) {
        $_SESSION["user"] = $_POST["username"];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid login. <a href='login.php'>Try again</a>";
    }
}
?>

<form method="POST">
    <h2>Login</h2>
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
