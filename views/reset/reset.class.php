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
require 'Lab08/Untitled/models/user_model.class.php';

class ResetView extends View
{
    public function display()
    {
        //add header from parent class
        parent::header();

        if (verify_user() == true){
?>

        <!-- page specific content starts -->

        <div class="top-row">reset password</div>

        <form action="index.php?action=do_reset" method="post">
            <input style="width: 500px; margin-left: 25px" type="text" name="username" value="<?php $_COOKIE['username']?>" readonly><br>

            <input style="width: 500px; margin-left: 25px" type="password" name="new_password" placeholder="Enter New Password"><br>

            <input type="submit" style="width: 505px; margin-left: 25px; padding: 5px;background-color: #333333; color: white" value="RESET PASSWORD">
        </form>
        <!-- page specific content ends -->

        <?php
        }else {
            echo 'Please Login First';
            echo '<div> 
                        <span>Already have an account? <a href="index.php?action=login">Login</a></span>
                  </div>';
        }
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}