
<?php include('views/elements/header.php'); ?>
<?php
if (is_array($user)) {
    extract($user);
}?>

    <div class="container">
        <div class="page-header">
            <h1>Member <?php echo $uID; ?></h1>
        </div>

        <p><?php echo $first_name . ' ' . $last_name; ?></p>
        <p><?php echo "<a href='mailto:" . $email . "'>" . $email . "</a>"; ?>

    </div>

<?php include('views/elements/footer.php'); ?>
