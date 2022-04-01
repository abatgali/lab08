<?php

//This file defines a class named UserModel with four public methods.

class UserModel extends Database {
    private $table = "users";


    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    public function add_user() {

        $dbConnection = parent::getConnection();


        //retrieve user details from registration form and add into users table in the usersystem database.
        if (!filter_has_var(INPUT_POST, 'username') ||
            !filter_has_var(INPUT_POST, 'password') ||
            !filter_has_var(INPUT_POST, 'f_name') ||
            !filter_has_var(INPUT_POST, 'l_name') ||
            !filter_has_var(INPUT_POST, 'email') ) {
            return false;
        }

        $username = $dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING)));
        $password = $dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
        $firstname = $dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'f_name', FILTER_SANITIZE_STRING)));
        $lastname = $dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'l_name', FILTER_SANITIZE_STRING)));
        $email = $dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));




        // Passwords need to be hashed before they are stored into the database.
        // To hash a password, call password_hash function. Please refer to http://php.net/manual/en/function.password-hash.php.
        $hash = password_hash($password, PASSWORD_DEFAULT);
        //store into database

        $sql = "INSERT into " .$this->getTable(). " values(null,'$username', '$hash', '$email', '$firstname', '$lastname')";


        // The method returns true if the insertion is successful or false if it fails.
        $query = $dbConnection->query($sql);
        if (!$query) {
            return false;
        }

        return true;
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
    unset($_COOKIE['username']);
    //The method should return true.
    return true;
}

public function reset_password() {

    //$db = parent::getDatabase();
    $dbConnection = parent::getConnection();


    //retrieve a user’s username and password from the password reset form and
    echo "<h2>inside reset_password</h2>";
    // then update the user’s password in the database.
    $new_pw = $_POST['new_password'];
    $_COOKIE['username'] = 'admin';
    $user = $_COOKIE['username'];
        // Make sure the password is hashed before it gets updated.
    //$hash = password_hash($new_pw, PASSWORD_DEFAULT);
    $sql = "UPDATE ".$this->getTable()." SET password = '$new_pw' WHERE username='$user'";
    // Return true if the password is successfully updated or false otherwise.
    return $dbConnection->query($sql);
}

}