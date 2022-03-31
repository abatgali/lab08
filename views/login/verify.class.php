<?php

/**
 * Author: Sierra Braun
 * Date: 3/29/22
 * File: login.class.php
 * Description:  the view file for the login
 */

class LoginVerifyView extends View{
    public function display(){

        //display header
        parent::header();


        //page content starts
        //check if login attempt was successful
        if (login() == true){
            echo '<h1>Your account has been created successfully</h1>';
        } else {
            echo '<h1> Your last attempt for creating an account failed. Please try again. </h1>';
        }

    ?>

    <!--hyperlinks-->
        <div class="bottom-row">
            <span>Already have an account? <a href="index.php?action=login">Login</a> </span>
        </div>


       <?php
        //display footer
        parent::footer();
    }
}