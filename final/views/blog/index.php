
<?php include('views/elements/header.php'); ?>


<div class="container">
    <div class="page-header">

        <h1><?php echo $title; ?></h1>
    </div>
    <div class='span8'>
        <?php foreach ($posts as $p) { ?>
            <h3><a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>" title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h3>
            <p class="post-meta-data"><?php echo $p['date'] = date('F j, Y', strtotime($p['date'])) . ' by: ' . $p['first_name'] . ' ' . $p['last_name'] . ' in: <a href="' . BASE_URL . 'category/categories/?categoryID=' . $p['categoryID'] . '">' . $p['name']; ?></a></p>
                <p><?php echo substr($p['content'], 0, 75); ?> <a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>">[...]</a></p>
            <div style="margin-top:15px;"><a href="<?php echo BASE_URL ?>ajax/get_post_content/?pID=<?php echo $p['pID']; ?>" class="btn post-loader">View Entire Post</a></div>
        <?php } ?>
    </div>
    <div class="span3">
        <a class="twitter-timeline"  href="https://twitter.com/WIRED" data-widget-id="546032056040321024">Tweets by @WIRED</a>
        <script>!function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>
    </div>
</div>

<?php include('views/elements/footer.php'); ?>