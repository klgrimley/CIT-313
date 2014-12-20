<?php
require_once 'application/config.php';
include('views/elements/header.php');
?>
<div class="container">
    <div class="page-header">

        <h2> Life, the Universe and Everything </h2>
    </div>
    <div class='span8'>
        <?php
        if (isset($_GET['Message'])) {
            echo $_GET['Message'];
        }
        ?>
    <!-- start slipsum code -->

<h3>We happy?</h3>
<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>

<h3>Uuummmm, this is a tasty burger!</h3>
<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>

<h3>Is she dead, yes or no?</h3>
<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>

<!-- please do not remove this line -->

<div style="display:none;">
<a href="http://slipsum.com">lorem ipsum</a></div>

<!-- end slipsum code -->
    </div>
        <div class="span3">
            <?php //if (!$response) { ?>
<!--                <h3>Get Today's Weather</h3>

                <form method="post" action="<?php //echo BASE_URL ?>weather/getresults">
                    <label for="zip">Enter Your Zip Code</label>
                    <input type="text" name="zip" id="zip" required="zip" />
                    <br>
                    <button type="submit" class="btn">Load Results</button>
                    <div style="margin-top:15px;"><a href="<?php //echo BASE_URL?>ajax/get_weather_results/" class="btn post-loader">Get Weather</a></div>
                </form>-->
            <?php //} else { ?>

<!--                <h3>Today's Weather for <?php //echo $response->request->query; ?></h3>


                <h4>Today's High: <?php //echo $response->weather->maxtempF ?></h4>
                <h4>Today's Low: <?php //echo $response->weather->mintempF ?></h4>-->


            <?php //} ?>
               
            <?php
            $i = 0;
            foreach ($story_items as $item) {
                echo '<h4><a href="' . $item->link . '">' . $item->title . '</a></h4>';
                echo '<i style="font-size:.9em;">' . $item->pubDate = date('F j, Y g:i a', strtotime($item->pubDate)) . '</i>';
                echo '<p>' . substr($item->description, 0, 75) . ' <a href="' . $item->link . '">[...]</a></p>';
                if (++$i == 5) break;
            }
            ?>
        </div>
    
</div>
<?php include('views/elements/footer.php'); ?>
