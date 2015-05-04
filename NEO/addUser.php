<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 5/3/15
 * Time: 4:40 PM
 */?>

<!DOCTYPE html>
<html lang="en">
<?php require "header.php"; ?>

<body>
<?php require "navbar.php"; ?>
<div class="container-fluid">

    <div class="row row-offcanvas row-offcanvas-left">
        <?php require "taskPanel.php"?>
        <div align="center">
            <h1>Create User</h1>
            <form action = "signUpUser.php"  method = "POST" >
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Registration</legend>
                    <label for="username">Username:</label> <input type="text" name="username" id="username"required><br>
                    <label for="password">Password:</label> <input type="text" name="password" id="password" required><br>
                    <label for="first_name">First Name:</label>  <input type="text" name="first_name" id="first_name" required><br>
                    <label for="last_name">Last Name:</label> <input type="text" name="last_name" id="last_name" required><br>
                    <label for="email">Email:</label>  <input type="text" name="email" id="email" required><br>
                    <label for="phone_number">Phone Number: </label><input type="tel" name="phone_number" id="phone_number" required><br>
                    <label for="profile_picture">Profile Picture: </label><input type="file" name="profile_picture" id="profile_picture" required/> <br>
                    <label>Sex:</label>
                    <input type = "radio" name="gender" value ="M" id="male_radio"> <label for="male_radio">Male</label>
                    <input type = "radio" name="gender" value ="F" id="female_radio"><label for="female_radio">Female</label> <br>
                    <button type="submit" class="btn btn-success">
                        <i class="icon-circle-arrow-right icon-large"></i> Submit
                    </button>

                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
<?php require "footer.php";?>
</html>