<?php

/**
 * Author: Sierra Braun
 * Date: 3/29/22
 * File: logout.class.php
 * Description:  the view file for the logout
 */

class LogoutVerifyView extends View{
    public function display(){

        //display header
        parent::header();
        ?>

        <!--        //page content starts-->

        <div class="top-row">LOGIN</div>

        <div class="middle-row">You have successfully logged out.</div>

        <!--hyperlinks-->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a> </span>
            <span style="float: right">Don't have an account? <a href="index.php?">Register</a> </span>
        </div>


        <?php
        //display footer
        parent::footer();
    }
}