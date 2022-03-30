<?php
/**
 * Author: Piper Varney
 * Date: 3/29/22
 * File: reset_confirm.class.php
 * Description:display a conformation message indicating whether
the user’s attempt to reset password was successful or failed. It should also display
hyperlinks accordingly.
 */

class ResetConfirmView extends View
{
    public function display()
    {
        //add header from parent class
        parent::header();
        ?>

        <!-- page specific content starts -->
        <!-- check if users attempt was successful or failed -->
        <?php if (reset_password() == true) {
            echo '<h1>Your password has successfully been reset</h1>';
        } else {
            echo '<h1> Oh no! Something went wrong. Please try again.</h1>';
        }
        ?>

        <!-- display hyperlinks -->
        <div class="bottom-row">
            <span style="float: left">Try Again <a href="index.php?action=reset">Reset Password</a></span>
            <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
        </div>

        <!-- page specific content ends -->

        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}