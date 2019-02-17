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
                                <li><img src="./Media/indexPics/community1.jpg" alt="some bullshit pic here">
                                    <!-- overlay -->
                    
                                     <div class="uk-overlay-panel uk-overlay-background">
                                            <h1 class="uk-text-center">Hazara Brimbank Community</h1>
                                            <h3 class="uk-text-center">The <a href="#">Hazara Brimbank community</a> is founded, to create Strong<br>connection amongst the Hazaras who live in Brimbank area.</h3>   
                                            <p class="uk-text-center"><button id="secreat"href="#" class="uk-button uk-button-primary uk-button-small">About Us</button></p>
                                            <p class="uk-text-center"><a href="aboutUs.php" class="uk-button-primary uk-button uk-button-large">About Us</a></p> 
                                     </div>
                                
                                    <!-- overlay finishes -->           
                                </li>
                                <li><img src="./Media/indexPics/community2.jpg" alt=""></li>
                                <li><img src="./Media/indexPics/community3.jpg" alt=""></li>
                                
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
                <h1 class="titleText">We Facilitate Varity of Activities</h1>
                <div class="container grid-3 center">
                    <div class="center items">
                        <h3>Community Support</h3>
                        <i class="fas fa-hands-helping fa-3x"></i>
                        <p class="item-left"class="item-left">The community provides a lot of supports around community awareness regarding their rights in Australian community. Furthermore, The community also arranges public meetings with the local council.</p>
                        <a href="events.php" class="uk-button uk-button-primary">Read more</a>
                    </div>

                    <div class="center itmes">
                        <h3>Classes</h3>
                        <i class="fas fa-chalkboard-teacher fa-3x"></i>
                        <p class="item-left">There are a lot of activities for the community members, one of the most important activity is Dari classes for the kids. Interested community members can join the classes.</p>
                        <a href="#" class="uk-button uk-button-primary">Read more</a>
                    </div>

                    <div class="center items">
                        <h3>Events</h3>
                        <i class="fas fa-calendar-week fa-3x"></i>
                         <p class="item-left">
                        We are a proud community that we celebreate our cultural, tridational and religous events on regular basis.such as: 
                            Now-roz event,
                            15th Of Shaban,
                            Eids, and
                            Moharam
                         </p>
                            
                        <a href="events.php" class="uk-button uk-button-primary">Read more</a>
                    </div>
                    <div class="center items">
                        <h3>Volunteering</h3>
                        <i class="fas fa-praying-hands fa-3x"></i>   
                        <p class="item-left"> The community helps some community members to get engaged in volunteering works with different organization. Currently, two community members are engaged with co-health.</p>
                        <a href="#" class="uk-button uk-button-primary">Read more</a>
                    </div>
                    <div class="center itmes">
                        <h3>Activites</h3>
                        <i class="fas fa-skating fa-3x"></i><p class="item-left"> The community leader and other volunteers always works hard to compile the list of different activates around the Brimbank community for the community members such as play group, and ...</p>
                        <a href="events.php" class="uk-button uk-button-primary">Read more</a>
                    </div>
                    <div class="center itmes">
                        <h3>Sports</h3>
                        <i class="fas fa-football-ball fa-3x"></i>
                        <p class="item-left"> The community has some arrangements with some local sports facilities to accommodate sports sessions for the community members. Furthermore, community has a soccer team. </p>
                        <a href="events.php" class="uk-button uk-button-primary">Read more</a>
                    </div>
                    
                </div>
                <!-- our purpose starts from here -->
                <section>
                    <div class="bg-light bg-bottom">
                        <div class="container">
                            <div class="grid-2">
                                <div class="center">
                                <img id="pic" src="" alt="community picture here">
                                </div>

                                <div>
                                    <h2 class="allAboutUs">All about us</h2>
                                    <p class="item-left"> The Hazara Brimbank Community was established by active members of Hazara Refugees who lives in the Brimbank area. When first established the community had only 10 families registered.</p> 
                                    <p class="item-left"> By the passage of time and the growth of Hazara community and families in the Western Suburbs specially in the Brimbank area the number of community members also increased. To date, there are more than 100 families registered in the Hazara Brimbank Community. The community is activity involved in social, cultural and traditional events. Please read more in the about us page. </p>
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

