<?php

//This file defines a class named UserModel with four public methods.

class UserModel extends Database {

    public function add_user() {
        //retrieve user details from registration form and add into users table in the usersystem database.
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }
        // Passwords need to be hashed before they are stored into the database.
        // To hash a password, call password_hash function. Please refer to http://php.net/manual/en/function.password-hash.php.
        password_hash($password, PASSWORD_DEFAULT, 10);
        //store into database

        // The method returns true if the insertion is successful or false if it fails.
        //true, false
    }

    public function verify_user() {
        //retrieve a user’s username and password from the login form and then verify them again a database record.
// Check if the form is submitted if (
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        } exit;

        $x = parent::getInstance();
        $y = parent::getUserTable();
        $db = parent::getConnection();

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

} return false;

}