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

<!-- slideshow practice starts here -->

<div class="slideshow-wrapper">
            <div class="uk-container uk-container-center">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-slidenav-position"data-uk-slideshow="{autoplay:true, autoplayInterval:5000,duration:1000, animation: 'fade', kenburns:true}">

                            <ul class="uk-slideshow uk-overlay-active">
                                <li><img src="./Media/1.jpg" alt="some bullshit pic here">
                                    <!-- overlay -->
                    
                                     <div class="uk-overlay-panel uk-overlay-background">
                                            <h1 class="uk-text-center">Hazara Brimbank Community</h1>
                                            <h3 class="uk-text-center">The <a href="#">Hazara Brimbank community</a> is founded, to create Strong<br>Hormony amongst the Hazaras who live in Brimbank area.</h3>   
                                            <p class="uk-text-center"><button id="secreat"href="#" class="uk-button uk-button-primary uk-button-small">About Us</button></p>
                                            <p class="uk-text-center"><a href="aboutUs.php" class="uk-button-primary uk-button uk-button-large">About Us</a></p> 
                                     </div>
                                
                                    <!-- overlay finishes -->           
                                </li>
                                <li><img src="./Media/CommunityPic.jpg" alt=""></li>
                                <li><img src="./Media/3.jpg" alt=""></li>
                                
                            </ul>
                                <!-- the previouse and next buttons -->
                            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                            <!-- the dots at the bottom -->

                            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                                <li data-uk-slideshow-item="0"><a href=""></a></li>
                                <li data-uk-slideshow-item="1"><a href=""></a></li>
                                <li data-uk-slideshow-item="2"><a href=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- slideshow practice finishes here -->
    <div class="uk-container uk-container-center">
            <div class="bg-color">
            <!--  our Programs starts here here -->
                <div class="container grid-3 center">

                    
                        <h2>Community Support</h2>
                        <i class="fas fa-hands-helping fa-5x"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, delectus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nam!</p>
                    

                   
                        <h2>Dari Classes</h2>
                        <i class="fas fa-chalkboard-teacher fa-5x"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nam!</p>
                    

                   
                        <h2>Events</h2>
                        <i class="fas fa-calendar-week fa-5x"></i>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, culpa!Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nam!</p>
                    
                    
                </div>
                <!-- our purpose starts from here -->
                <section>
                    <div class="bg-light">
                        <div class="container">
                            <div class="grid-2">
                                <div class="center">
                                <img id="pic" src="./Media/5.jpg" alt="community picture here">
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
      </div>      
    <!-- our purpose finishes here -->
    
<!-- start of footer-->
   <?php include dirname(__FILE__).'/includes/footer.php';?>
  
</body>
</html>