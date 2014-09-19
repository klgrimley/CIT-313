<?php
/*
 * Author: Kevin Grimley
 * Date: 9/6/2014
 * Name: header.php
 * Description: body section 
 */

$infos = array('name' => 'Kevin Grimley', 'color' => 'Blue', 'movie' => 'The Man From Earth', 'book' => 'Lord of the Rings', 'website' => 'Mine');
?>

<h1><?php echo $infos['name']; ?></h1>

<?php

function display_this($infos) {
    $counter = 0;
    echo '<ul>';
    foreach ($infos as $info) {
        if ($counter++ == 0)
            continue;
        print '<li>' . $info . '</li>';
    }
    echo '</ul>';
}

echo display_this($infos);
?>

<?php
include 'includes/footer.php';
?>
