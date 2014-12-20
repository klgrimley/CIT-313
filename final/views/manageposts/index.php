<?php include('views/elements/header.php'); ?>

<div class="container">
    <div class="page-header">
        <h1>Manage Posts</h1>
    </div>

    <?php
    if (isset($message)) {
        if ($message) {
            ?>
            <div class ="well">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message ?>
                </div>
            </div>
        <?php
        }
    }
    ?>

    <div class="well">
        <div class="span4">
            <a href="<?php echo BASE_URL; ?>manageposts/add" class="btn btn-primary">Add A Post</a>
            <a href="<?php echo BASE_URL; ?>category" class="btn btn-primary">Manage Categories</a>
        </div>
    </div>
    <div class='span8'>
<?php foreach ($posts as $p) { ?>
            <h3><?php echo $p['title']; ?></h3>
            <p class="post-meta-data"><?php echo $p['date'] = date('F j, Y', strtotime($p['date'])); ?></a></p>
            <a class="btn" href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>">View Post</a>
            <a class="btn" href="<?php echo BASE_URL ?>manageposts/edit/<?php echo $p['pID']; ?>">Edit Post</a>
            <a class="btn" href="<?php echo BASE_URL ?>manageposts/delete/?pID=<?php echo $p['pID']; ?>">Delete Post</a>

<?php } ?>
    </div>
</div>
<?php include('views/elements/footer.php'); ?>

