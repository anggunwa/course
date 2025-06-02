<?php

interface Loggable {
    public function logActivity($activity, LoginLogger $logger);
}

class LoginLogger {
    private array $logs = [];

    public function addLog($message) {
        $timestamp = date("Y-m-d H:i");
        $this->logs[] = "[$timestamp] $message";
    }

    public function getLogs() {
        return $this->logs;
    }
}

class User {
    private $username;
    private $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return " Email - " . $this->email;
    }

    public function displayInfo() {
        return "User Info:" . $this->getUsername() . "," . $this->getEmail();
    }
}

class Admin extends User implements Loggable {
    private $role;

    public function __construct($username, $email, $role) {
        parent::__construct($username, $email);
        $this->role = $role;
    }

    public function getRole() {
        return " Role - " . $this->role;
    }

    public function displayInfo() {
        return "User Info: " . $this->getUsername() . ",". $this->getEmail() . "," . $this->getRole();
    }

    public function logActivity($activity, LoginLogger $logger) {
        $message = "Admin " . $this->getUsername() . " performed: " . $activity;
        $logger->addLog($message);
    }
}

$admin = new Admin("John Marston", "john@example.com", "Administrator");
$logger = new LoginLogger();

$admin->logActivity("Deleted a user account", $logger);
$admin->logActivity("Reset user password", $logger);

foreach ($logger->getLogs() as $log) {
    echo $log . "<br>";
}



?>