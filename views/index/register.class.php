<?php
/**
 * Author: Piper Varney
 * Date: 3/29/22
 * File: register.class.php
 * Description:  display a confirmation message after a user has attempted
 * to create an account. Please note the page should display different messages indicating
 * whether the registration is successful or failed and then display hyperlinks accordingly.
 */

class RegisterView extends View
{
    public function display()
    {
        //add header from parent class
        parent::header();
        ?>
        <!-- page specific content starts -->
        <!-- display confirmation message top row-->
        <div class="top-row">Congrats!</div>

        <!-- middle row -->
        <div class="middle-row">
            <?php // retrieve the form data by using the element's name attributes
            if (isset($_POST['submit'])) {
                echo "<h3>Your account has successfully been created.</h3>";
            } else {
                echo "<h3>We are sorry, but an error has occurred.</h3>";
            } ?>
        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            <span style="float: right">Try Again <a href="index.php">Register</a></span>
        </div>

        <!-- page specific content ends -->

        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}