<?php
/**
 * Author: Piper Varney
 * Date: 3/29/22
 * File: reset.class.php
 * Description:display the password reset form if the user has logged in. The
 * form should automatically fill the username field using the cookie created when the user
 * logs in. It should also make the username field read-only. The form should use POST method
 * to submit data. If the user is currently not logged in, display an error message instead.
 */

class ResetView extends View
{
    public function display()
    {
        //add header from parent class
        parent::header();
?>

        <!-- page specific content starts -->

        <div class="top-row">reset password</div>

        <!-- page specific content ends -->

        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}