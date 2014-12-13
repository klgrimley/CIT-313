<?php include('views/elements/header.php'); ?>
<?php
if (is_array($user)) {
    extract($user);
}?>
<div class="container">
    <div class="page-header">
        <h1> <?php echo $first_name ?>'s Profile</h1>
    </div>
    <div class="row">
        <div class="warn_contain"></div>
        <div class="span8">
            <form action="<?php echo BASE_URL ?>members/<?php echo $task ?>" method="post">
                <label id="firstname_label" value='<?php echo $first_name ?>' for="firstname">First Name:</label>
                <input id="firstname" type="text" name="firstname">
                <label id="lastname_label" value='<?php echo $last_name ?>' for="lastname">Last Name:</label>
                <input id="lastname" type="text" name="lastname">
                <label id="email_label" for="email">Email:</label>
                <input id="email" type="text" value='<?php echo $email ?>' name="email">
                <label id="password_label" type="password" for="password">Password:</label>
                <input id="password" type="password" name="password">
                <label id="confirm_label" type="password" for="confirm_password">Password:</label>
                <input id="confirm_password" type="password" name="confirm_password">
                <br>
                <input type="hidden" name="uID" value="<?php echo $_SESSION['uID'] ?>"/>
                <button id="submit" class="btn form-button" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
<?php include('views/elements/footer.php'); ?>
