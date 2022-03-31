<?php

class UserController {

    // display the registration form; default action
    public function index()
    {
        // creating an instance of IndexView class
        // to call display function defined within it
        $indexView = new IndexView();
        $indexView->display();

    }

    // register the user by creating a user account and storing the data in the database
    public function register()
    {
        $registerView = new RegisterView();
        $registerView->display();
    }

    // display the login form
    public function login()
    {

    }

    // verify username and password against a database record
    public function verify()
    {

    }

    // log a user out of the system
    public function logout()
    {

    }


    // display the password reset form
    public function reset()
    {

    }


    // reset the password by updating a database record.
    public function do_reset()
    {

    }


    // display the custom error page
    public function error($msg)
    {

    }

}