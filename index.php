<?php

/*
 * Author: Anant Batgali
 * Date: 03/31/2022
 * Name: index.php
 * Description: short description about this file
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file

// set default action value
$action = 'home';

// checking if action could be retrieved and
// then setting it\'s current value
if ((isset($_GET['action'])) && !(empty($_GET['action']))) {
    $action = $_GET['action'];
}

if ($action == 'home') {

    $user_controller->index();
}

else if ($action == 'register') {

    $user_controller->register();
}

else if ($action == 'login') {

    $user_controller->login();
}

else if ($action == 'verify') {

    $user_controller->verify();
}

else if ($action == 'reset') {

    $user_controller->reset();
}

else if ($action == 'do_reset') {

    $user_controller->do_reset();
}

else {

    $message = 'Invalid action requested.';
    $user_controller->error($message);
}

