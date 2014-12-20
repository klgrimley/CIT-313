<?php include('views/elements/header.php'); ?>


    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>

    <?php foreach ($categories as $c) { ?>
        <ul>
            <li><a href="<?php echo BASE_URL ?>category/categories/?categoryID=<?php echo $c['categoryID'];?>"><?php echo $c['name']; ?></a></li>
        </ul>
    <?php } ?>
    </div>

<?php include('views/elements/footer.php'); ?>