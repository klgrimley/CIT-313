<?php
require_once 'application/config.php';
include('elements/header.php');
?>
<div class="container">
    <div class="page-header">
        <h1> Hello From the View </h1>
    </div>
    <?php
    if (isset($_GET['Message'])) {
        echo $_GET['Message'];
    }
    ?>
</div>
<?php include('elements/footer.php'); ?>
