<!DOCTYPE html>
<html lang="en">
<?php
$pageId=3;
 include dirname(__FILE__).'/includes/tools.php';
 printHead('CommunitySupport');

?>
<body>
<div class="uk-container uk-container-center">
<main class="bg-color">
    <h1 class="lg-heading">This is the Events page</h1>
    <div class="bigImg">
        <div class="main-img">
            <img src="./Media/media/img1.jpg" id="current">
        </div>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quae neque architecto corrupti dolorem nostrum vel tempora, ducimus dicta ipsam, a natus, accusamus optio itaque debitis maxime porro consequatur provident.</p>

<div class="thumbnails">
        <div class="imgs">
            <img src="./Media/media/img1.jpg">
            <img src="./Media/media/img2.jpg">
            <img src="./Media/media/img3.jpg">
            <img src="./Media/media/img1.jpg">
            <img src="./Media/media/img5.jpg">
            <img src="./Media/media/img1.jpg">
            <img src="./Media/media/img2.jpg">
            <img src="./Media/media/img3.jpg">
        </div>
    
</div>
</div>
</main>
      <!-- the containt of the page finishes here -->
      <?php include dirname(__FILE__).'/includes/footer.php';?>
</body>
</html>