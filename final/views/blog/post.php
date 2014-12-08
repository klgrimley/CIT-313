
<?php include('views/elements/header.php'); ?>
<?php
if (is_array($post)) {
    extract($post);
}
?>

<div class="container">
    <div class="page-header">

        <h1><?php echo $title; ?></h1>
        <p class="post-meta-data"><?php echo $date = date('F j, Y', strtotime($date)) . ' by: ' . $first_name . ' ' . $last_name . ' in: ' . $name; ?></p>
    </div>

    <?php echo $content; ?>
    <div id="comments-body">
        <h3> Comments</h3>
        <div class="well">
            <span class="post-meta-data"><?php echo 'by: ' . $first_name . ' ' . $last_name . ' on: ' . $date = date('F j, Y', strtotime($date)); ?></span>
            <br>
            <?php $commentText ?>
            <form method="POST" action="#">
                <input id="commentID" type="hidden" value="<?php echo $pID; ?>">
            </form>
        </div>
    </div>
    <?php
    if ($u->isRegistered()) {
        ?>
        <form method="POST" action="#">
            <textarea id="textComment" class="form-control" rows="3" placeholder="Write your comment here." name="textComment"></textarea>
            <br>
            <input id="submitComment" class="btn btn-primary" type="submit" value="Comment">
            <input id="pid" type="hidden" value="<?php echo $pID; ?>" name="pid">
            <input id="uid" type="hidden" value="<?php echo $uID; ?>" name="uid">
        </form>
    <?php } ?>
</div>

<?php include('views/elements/footer.php'); ?>