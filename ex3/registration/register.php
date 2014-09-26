<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise 3</title>
        <link rel="stylesheet" type="text/css" href="/GitHub/CIT313-Fall2014/CIT-313/ex3/css/styles.css" />
    </head>
    <body>
        <div class="wrapper">
            <form action="results.php" method="post">
                <label for="fname" id="fname-label">First Name: </label>
                <input type="text" name="fname" id="fname" class="form-input">
                <label for="lname" id="lname-label">Last Name: </label>
                <input type="text" name="lname" id="lname" class="form-input">
                <label for="email" id="email-label">Email: </label>
                <input type="text" name="email" id="email" class="form-input">
                <input type="submit" value="Register" class="register-button">
            </form>
        </div>
    </body>
</html>
