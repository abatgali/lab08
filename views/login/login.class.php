<?php

/**
 * Author: Sierra Braun
 * Date: 3/29/22
 * File: login.class.php
 * Description:  the view file for the login
 */

class LoginView extends View{
    public function display(){

        //display header
        parent::header();
        ?>

<!--    page specific content starts-->

        <h1>Please enter your username and password.</h1>

    <form action="index.php?actions=" method="post">
        <input id="username" name="username" type="text" value="Username">

        <input id="password" name="password" type="password" minlength="5" value="Password">

        <input type="submit" value="LOGIN">
    </form>

        <div class="bottom-row">
            <span>Don't have an account? <a href="index.php">Register</a> </span>
        </div>





<?php
        //display footer
        parent::footer();
    }
}