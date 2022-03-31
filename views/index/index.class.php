<?php
/**
 * Author: Piper Varney
 * Date: 3/29/22
 * File: index.class.php
 * Description:  the view file for the application homepage. It defines a class
named Index and a public method named display(), which displays the registration form.
The registration form allows a user to enter username, password, email, first name and last
name.
 */

class IndexView extends View {
    public function display() {
        //add header from parent class
        parent::header();
?>
    <!-- page specific content starts -->
        <form action="index.php?action=" method="post">
            <input id="username" name="username" type="text" value="Username">
            <br>
            <input id="password" name="password" type="password" minlength="5" value="Password, 5 characters minimum" required>
            <br>
            <input id="email" name="email" type="email" value="email" required>
            <br>
            <input id="f_name" name="first" type="text" value="First name" required>
            <br>
            <input id="l_name" name="last" type="text" value="Last name" required>
            <br>
            <input type="submit" value="Submit">
        </form>
        <!-- page specific content ends -->

        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}