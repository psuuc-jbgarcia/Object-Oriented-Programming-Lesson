<?php
require "User.php";
$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $user->register($_POST["username"], $_POST["password"]);
    echo $message . " <a href='login.php'>Login here</a>";
}
?>

<form method="POST">
    <h2>Register</h2>
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>
