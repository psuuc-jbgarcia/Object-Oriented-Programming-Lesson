<?php
class User {
    private $file = "users.json";
    private $users = [];

    public function __construct() {
        if (file_exists($this->file)) {
            $this->users = json_decode(file_get_contents($this->file), true);
        }
    }

    // Register new user
    public function register($username, $password) {
        foreach ($this->users as $user) {
            if ($user["username"] === $username) {
                return "Username already exists.";
            }
        }

        $this->users[] = [
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ];

        file_put_contents($this->file, json_encode($this->users, JSON_PRETTY_PRINT));
        return "Registration successful!";
    }

    // Login user
    public function login($username, $password) {
        foreach ($this->users as $user) {
            if ($user["username"] === $username && password_verify($password, $user["password"])) {
                return true;
            }
        }
        return false;
    }
}
