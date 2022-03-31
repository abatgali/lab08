<?php

//This file defines a class named UserModel with four public methods.

class UserModel {
private $db, $dbConnection;
static private $_instance = null;

    public function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
    }

    static public function getUsers() {
        if (self::$_instance == NULL) {
            self::$_instance = new UserModel();
        }
        return self::$_instance;
    }

    public function add_user() {
        //retrieve user details from registration form and add into users table in the usersystem database.
        if (!filter_has_var(INPUT_POST, 'username') ||
            !filter_has_var(INPUT_POST, 'password') ||
            !filter_has_var(INPUT_POST, 'firstname') ||
            !filter_has_var(INPUT_POST, 'lastname') ||
            !filter_has_var(INPUT_POST, 'email') ) {
            return false;
        }

        $username = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING)));
        $password = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
        $firstname = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING)));
        $lastname = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING)));
        $email = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));


        if (strlen($password) < 5) {
                return false;
            }


        // Passwords need to be hashed before they are stored into the database.
        // To hash a password, call password_hash function. Please refer to http://php.net/manual/en/function.password-hash.php.
        $hash = password_hash($password, PASSWORD_DEFAULT);
        //store into database

        $sql = "INSERT into ". Database::getUserTable() . "values(null,". $username . "," . $hash .  "," . $email .
            "," . $firstname . "," . $lastname . ")";

        // The method returns true if the insertion is successful or false if it fails.
        $query = $this->dbConnection->query($sql);
        if (!$query) {
            return false;
        } return true;
    }

    public function verify_user() {
        //retrieve a user’s username and password from the login form and then verify them again a database record.
// Check if the form is submitted if (
        if (isset($_POST['username']) AND isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        } exit;

        $x = Database::getInstance();
        $y = $x->getUserTable();
        $db = $x->getConnection();

        $sqlU = "SELECT username FROM" . $y . " WHERE username=" . $username;
        $sql = "SELECT password FROM" . $y . " WHERE username=" . $username;

        $query = $db->query($sql);
        $queryU = $db->query($sqlU);
        $dbUsername = $queryU->fetch_assoc();
        if (count($dbUsername) != 0) {
            $dbPassword = $query->fetch_assoc();

            if (password_verify($password, $dbPassword[0])) {
                $_COOKIE['username'] = $username;
                return true;
            } else return false;
        } else return false;
}

public function logout() {
    //logout a user by destroying the temporary cookie created when the user signs in.

    //The method should return true.

}

public function reset_password() {
    //retrieve a user’s username and password from the password reset form and

    // then update the user’s password in the database.

    // Make sure the password is hashed before it gets updated.

    // Return true if the password is successfully updated or false otherwise.

}

}