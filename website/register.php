<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Load users.json
    $users = json_decode(file_get_contents("users.json"), true);

    // Check if user already exists
    foreach ($users as $user) {
        if ($user["username"] == $username) {
            die("Username already exists. <a href='register.php'>Try again</a>");
        }
    }

    // Add new user
        $users[] = [
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT) // secure hash
        ];

    // Save back to JSON
    file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));

    echo "Registration successful! <a href='login.php'>Login here</a>";
}
?>

<form method="POST">
    <h2>Register</h2>
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>
