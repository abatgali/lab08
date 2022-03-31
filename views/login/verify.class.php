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
        ?>

<!--        //page content starts-->

        <div class="top-row">LOGIN</div>

        <div class="middle-row">You have successfully logged in.</div>

    <!--hyperlinks-->
        <div class="bottom-row">
            <span style="float: left">Want to log out? <a href="index.php?action=logout">Logout</a> </span>
            <span style="float: right">Reset Password? <a href="index.php?action=reset">Reset</a> </span>
        </div>


       <?php
        //display footer
        parent::footer();
    }
}