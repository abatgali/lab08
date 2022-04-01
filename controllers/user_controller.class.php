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


        $userModel = new UserModel();
        $d = $_POST['submit'];
        if($userModel->add_user()) {
            $d = true;
        }

        $registerView->display();

    }

    // display the login form
    public function login()
    {
        $loginView = new LoginView();
        $loginView->display();

    }

    // verify username and password against a database record
    public function verify()
    {
        $userModel = new UserModel();
        $userModel->verify_user();

    }

    // log a user out of the system
    public function logout()
    {
        $userModel = new UserModel();
        $userModel->logout();
    }


    // display the password reset form
    public function reset()
    {
        $resetView = new ResetView();
        $resetView->display();
    }


    // reset the password by updating a database record.
    public function do_reset()
    {
        $userModel = new UserModel();
        // if password resets then display confirmation
        if ($userModel->reset_password()) {
            $resetConfirm = new ResetConfirmView();
            $resetConfirm->display();
        }

    }

    // display the custom error page
    public function error($msg)
    {
        $error = new UserError();
        $error->display($msg);
    }

}