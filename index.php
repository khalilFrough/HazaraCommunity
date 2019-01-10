<!DOCTYPE html>
<html lang="en">
<?php
$pageId=1;
 include dirname(__FILE__).'/includes/tools.php';
 //include dirname(__FILE__).'/includes/head.php';
 printHead('Home');

?>

<body>
   <!-- the navbar starts the here, the function is called form the file tool.php  -->
    <?php include dirname(__FILE__).'/includes/header.php';
    ?>
 <!-- the navbar end here -->
    <div class="uk-slidenav-position " data-uk-slideshow>
        <!-- these will be our slides -->
    <ul class="tm-home-slideshow uk-slideshow uk-slideshow-fullscreen">
        <li><img src="Media/1.jpeg" alt="community Image">
           <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
           <div>
                <h1>Hazara Brimbank Community</h1>
                <p>The <a href="#">Hazara Brimbank community</a> is founded, to create Strong<br>Hormony amongst the Hazaras who live in Brimbank area.</p>
                <button class="uk-button uk-button-primary uk-button-large">More About Us</button>
            </div>
                                                                       
           </div> 
     </li>
        <li><img src="Media/2.jpg" alt="community Image"></li>
        
    </ul>
    <!-- the next and previous pictures -->
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
   
   <!-- the dotnavs at the bottom of the picture -->
    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
        <li data-uk-slideshow-item="0"><a href=""></a></li>
        <li data-uk-slideshow-item="1"><a href=""></a></li>
    </ul>
</div>
<div class="bg-color">
<!--  our Programs starts here here -->

    <div class="container grid-3 center">
        <button class="uk-button uk-button-primary">
            <h1>Dari Classes</h1>
            <div> <img src="" alt="Altaf Khan's picture"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nam!</p>
        </button>
        <button class="uk-button uk-button-primary">
            <h1>Events</h1>
            <div> <img src="" alt="Altaf Khan's picture"></div>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, culpa!Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nam!</p>
        </button>

        <button id="btn" class="uk-button uk-button-primary">
            <h1>Community Support</h1>
            <div> <img src="" alt="Altaf Khan's picture"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, delectus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nam!</p>
        </button>
        
    </div>
    <!-- our purpose starts from here -->
    <section>
        <div class="bg-light">
            <div class="container">
                <div class="grid-2">
                    <div class="center">
                       <img src="../Media/2.jpg" alt="community picture here">
                    </div>

                    <div>
                        <h3>All about us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias mollitia sed soluta tempore labore perspiciatis eum eligendi ea? Distinctio, totam!</p>

                    </div>
                </div>
                   
            </div>
        </div>
    </section>
</div>
    <!-- our purpose finishes here -->
    
<!-- start of footer-->
   <?php include dirname(__FILE__).'/includes/footer.php';?>
  
</body>
</html>