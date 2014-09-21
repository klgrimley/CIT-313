<!DOCTYPE html>
<?php
include_once 'classes/user.class.php';
include_once 'classes/registered.class.php';
include_once 'classes/admin.class.php';

$registered_user = new Registered('one', '0001');
$admin_user = new Admin('two', '0002');

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
        <title>Exercise 2</title>
    </head>
    <body>
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
        <br>
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
    </body>
</html>
