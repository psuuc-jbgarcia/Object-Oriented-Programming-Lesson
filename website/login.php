<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Load users.json
    $users = json_decode(file_get_contents("users.json"), true);

    foreach ($users as $user) {
        if ($user["username"] == $username && password_verify($password, $user["password"])) {
            $_SESSION["user"] = $username;
            header("Location: dashboard.php");
            exit;
        }
    }

    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>

<form method="POST">
    <h2>Login</h2>
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
