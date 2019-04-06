<?php
require_once("config.php");
$upload_directory = "uploads";



// used in slider.php (templates/front/slider.php)
function get_active_slide() {

$query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
confirm($query);



while($row = fetch_array($query)) {

$slide_image = display_image($row['slide_image']);

$slide_active = <<<DELIMETER


 <div class="item active">
    <img class="slide-image" src="../resources/{$slide_image}" alt="">
</div>


DELIMETER;

echo $slide_active;


    }

}





// used in slider.php (templates/front/slider.php)
function get_slides() {

$query = query("SELECT * FROM slides");
confirm($query);



while($row = fetch_array($query)) {

$slide_image = display_image($row['slide_image']);

$slides = <<<DELIMETER


 <div class="item">
    <img class="slide-image" src="../resources/{$slide_image}" alt="">
</div>


DELIMETER;

echo $slides;




}





}



 ?>
