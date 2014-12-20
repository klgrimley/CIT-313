
<?php include('views/elements/header.php'); ?>


    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>

    <?php foreach ($categories as $c) { ?>
            <h3><a href="<?php echo BASE_URL ?>blog/post/<?php echo $c['pID']; ?>" title="<?php echo $c['title']; ?>"><?php echo $c['title']; ?></a></h3>
            <p class="post-meta-data"><?php echo $c['date'] = date('F j, Y', strtotime($c['date'])) . ' by: ' . $c['first_name'] . ' ' . $c['last_name'] . ' in: ' . $c['name']; ?></p>
<!--            <p><?php echo $c['content']; ?></p>-->
            <div style="margin-top:15px;"><a href="<?php echo BASE_URL?>ajax/get_post_content/?pID=<?php echo $c['pID'];?>" class="btn post-loader">View Entire Post</a></div>
    <?php } ?>
    </div>

<?php include('views/elements/footer.php'); ?>