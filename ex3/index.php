<!DOCTYPE html>
<?php
spl_autoload_register(function ($class) {
            include 'classes/' . $class . '.class.php';
        });

$registered_user = new Registered('User', 'jsmith');
$admin_user = new Admin('Admin', 'tjohnson');

$registered_user->first_name = "Joe";
$registered_user->last_name = "Smith";
$registered_user->email_address = "joe@smith.com";

$admin_user->first_name = "Tom";
$admin_user->last_name = "Johnson";
$admin_user->email_address = "tom@johnson.com";
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise 3</title>
        <link rel="stylesheet" type="text/css" href="/GitHub/CIT313-Fall2014/CIT-313/ex3/css/styles.css" />
    </head>
    <body>
        <div class="wrapper">
            <div class="info">
                Name: <?php echo $registered_user->first_name . " " . $registered_user->last_name ?>
            </div>
            <div class="info">
                ID: <?php echo $registered_user->user_id; ?>
            </div>
            <div class="info">
                Level: <?php echo $registered_user->user_level; ?>
            </div>
            <div class="info">
                User Type: <?php echo $registered_user->user_type; ?>
            </div>
            <div class="info">
                Email: <?php echo $registered_user->email_address ?>
            </div>
            <hr><br>
            <div class="info">
                Name: <?php echo $admin_user->first_name . " " . $admin_user->last_name ?>
            </div>
            <div class="info">
                ID: <?php echo $admin_user->user_id; ?>
            </div>
            <div class="info">
                Level: <?php echo $admin_user->user_level; ?>
            </div>
            <div class="info">
                User Type: <?php echo $admin_user->user_type; ?>
            </div>
            <div class="info">
                Email: <?php echo $admin_user->email_address ?>
            </div>
            <div>
                <p>The answer is... <?php echo Admin::evaluation(2, 19); ?></p>
            </div>
            <div>
                <a class="register-button" href="registration/register.php">Register</a>
            </div>
        </div>
    </body>
</html>
