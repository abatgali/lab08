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
            <input id="username" type="text" required>
            <input id="password" type="password" minlength="5" required>
            <input id="email" type="email" required>
            <input id="f_name" type="text" required>
            <input id="l_name" type="text" required>
            <input type="submit" value="Submit">
        </form>
        <!-- page specific content ends -->

        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}