<?php

//This file defines a class named UserModel with four public methods.

class UserModel
{
    //any private attributes
    //the four public methods
    public function add_user()
    {
        //retrieve user details from registration form and add into users table in the usersystem database.
        if (isset($_GET['password'])) {
            $password = $_GET['password'];
        }
        // Passwords need to be hashed before they are stored into the database.
        // To hash a password, call password_hash function. Please refer to http://php.net/manual/en/function.password-hash.php.
        password_hash($password, null, 10);
        //store into database

        // The method returns true if the insertion is successful or false if it fails.
        //true, false
    }

    public function verify_user()
    {
        //retrieve a user’s username and password from the login form and then verify them again a database record.
// Check if the form is submitted if (
        if (isset($_GET['login'])) {
            $username = $_GET['username'];
            $password = $_GET['password'];
        }
    }

    password_verify($password);
    // If both username and password are valid, create temporary cookie to store username and return true;

    // If either username or password is invalid, return false.

    // To verify a hashed password, call password_verify function. http://php.net/manual/en/function.password-verify.php.

}

public
function logout()
{
    //logout a user by destroying the temporary cookie created when the user signs in.

    //The method should return true.

}

public
function reset_password()
{
    //retrieve a user’s username and password from the password reset form and

    // then update the user’s password in the database.

    // Make sure the password is hashed before it gets updated.

    // Return true if the password is successfully updated or false otherwise.

}

}