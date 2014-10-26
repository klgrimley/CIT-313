
<?php include('elements/header.php'); ?>
<?php
if (is_array($user)) {
    extract($user);
    ?>

    <div class="container">
        <div class="page-header">

            <h2><?php echo $email; ?></h2>
            <p><?php echo $first_name . ' ' . $last_name; ?></p>
            <p><?php echo "<a href='mailto:".email."'>".$email."</a>";?>
        </div>
    </div>
<?php } ?>

<?php if (is_array($users)) { ?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>

    <?php foreach ($users as $u) { ?>
            <h3><a href="<?php echo BASE_URL ?>members/view/<?php echo $u['uID']; ?>"<?php echo $u['email']; ?></a></h3>
            <p><?php echo $u['first_name'] . ' ' . $u['last_name']; ?></p>
            <p><?php echo "<a href='mailto:".$u['email']."'>".$u['email']."</a>";?>
    <?php } ?>
    </div>

<?php } ?>


<?php include('elements/footer.php'); ?>
