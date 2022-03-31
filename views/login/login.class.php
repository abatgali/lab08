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
        <div class="top-row">login</div>
        <br>


        <div style="margin-left: 25px;">Please enter your username and password.</div>
        <br>

    <form action="index.php?actions=" method="post">
        <div><input style="width: 500px; margin-left: 25px;" id="username" name="username" type="text" value="Username"></div>

       <div> <input style="width: 500px; margin-left: 25px; id="password" name="password" type="password" minlength="5" value="Password"></div>

        <div><input  class="button" type="submit" value="LOGIN"></div>
    </form>

        <div class="bottom-row">
            <span>Don't have an account? <a href="index.php">Register</a> </span>
        </div>





<?php
        //display footer
        parent::footer();
    }
}