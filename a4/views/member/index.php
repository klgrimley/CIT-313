
<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>

        <?php foreach ($users as $u) { ?>
            <h3><a href="<?php echo BASE_URL ?>member/user/<?php echo $u['uID']; ?>"><?php echo $u['email']; ?></a></h3>
            <p><?php echo $u['first_name'] . ' ' . $u['last_name']; ?></p>
            <p><?php echo "<a href='mailto:" . $u['email'] . "'>" . $u['email'] . "</a>"; ?>
            <?php } ?>
    </div>

<?php include('views/elements/footer.php'); ?>
