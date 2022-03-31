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
        <div class="top-row">create an account</div><br>

        <div style="margin-left: 25px"> Please complete the entire form. All fields are required.</div><br>

        <form action="index.php?action=" method="post">
            <input style="width: 500px; margin-left: 25px" id="username" name="username" type="text" placeholder="Username" required>
            <br><br>
            <input style="width: 500px; margin-left: 25px" id="password" name="password" type="password" minlength="5" placeholder="Password, 5 characters minimum" required>
            <br><br>
            <input style="width: 500px; margin-left: 25px" id="email" name="email" type="email" placeholder="Email" required>
            <br><br>
            <input  style="width: 500px; margin-left: 25px" id="f_name" name="first" type="text" placeholder="First Name" required>
            <br><br>
            <input style="width: 500px; margin-left: 25px" id="l_name" name="last" type="text" placeholder="Last Name" required>
            <br><br>
            <input style="width: 505px; margin-left: 25px; padding: 5px;background-color: #333333; color: white" type="submit" value="REGISTER"><br><br>
        </form>

        <div class="bottom-row">
            <span>Already have an account? <a href="index.php?action=login">Login</a> </span>
        </div>
        <!-- page specific content ends -->

        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}