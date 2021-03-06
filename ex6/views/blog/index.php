
<?php include('views/elements/header.php'); ?>


    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>

    <?php foreach ($posts as $p) { ?>
            <h3><a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>" title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h3>
            <p class="post-meta-data"><?php echo $p['date'] = date('F j, Y', strtotime($p['date'])) . ' by: ' . $p['first_name'] . ' ' . $p['last_name'] . ' in: ' . $p['name']; ?></p>
            <p><?php echo $p['content']; ?></p>

    <?php } ?>
    </div>

<?php include('views/elements/footer.php'); ?>