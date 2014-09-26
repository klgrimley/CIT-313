<?php
spl_autoload_register(function ($class) {
            include '../classes/' . $class . '.class.php';
        });


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$registered_user = new Registered('regular', 'newuser');
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise 3</title>
        <link rel="stylesheet" type="text/css" href="/GitHub/CIT313-Fall2014/CIT-313/ex3/css/styles.css" />
    </head>
    <body>
        <div class="wrapper">
            <p id="newuser">
                <?php
                if ($registered_user instanceof Registered) {
                    echo $firstname . ' ' . $lastname . ' is a new user and their email is: ' . $email;
                } else {
                    echo 'You screwed up! Have a nice day.';
                }
                ?> 
            </p>
        </div>
    </body>
</html>