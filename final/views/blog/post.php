
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
        <br>
        <h3> Comments</h3>
        <br>
        <?php if(isset($comments)) foreach ($comments as $c){ ?>
        <div class="well">
            <span class="post-meta-data"><?php echo 'by: ' . $c['first_name'] . ' ' . $c['last_name'] . ' on: ' . $c['date'] = date('F j, Y', strtotime($c['date'])); ?></span>
            <br>
            <?php echo $c['commentText']; ?>
            <form method="POST" action="#">
                <input id="commentID" type="hidden" value="<?php echo $c['commentID']; ?>">
            </form>
        </div>
        <?php } ?>
    </div>
    <?php
    if ($u->isRegistered()) {
        ?>
        <form method="POST" action="<?php echo BASE_URL?>post/<?php echo $task?>" onsubmit="editor.post()">
            <textarea id="textComment" class="form-control" rows="3" placeholder="Write your comment here." name="textComment"></textarea>
            <br>
            <input id="submitComment" class="btn btn-primary" type="submit" value="Comment">
            <input id="pid" type="hidden" value="<?php echo $pID; ?>" name="pid">
            <input id="uid" type="hidden" value="<?php echo $_SESSION['uID']; ?>" name="uid">
        </form>
    <?php } ?>
</div>

<?php include('views/elements/footer.php'); ?>