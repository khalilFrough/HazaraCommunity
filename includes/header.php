<nav class="uk-navbar">
    <div class="uk-container uk-container-center">
       <a href="" class="uk-navbar-brand uk-hidden-small"><img src="/Media/Logos/1.jpg"></a>
           <ul class="uk-navbar-nav uk-hidden-small">
               <li class="<?php echo $pageId==1 ?'uk-active' :' '?>"><a href="index.php"> <i class="fas fa-home"></i> Home</a></li>
               <li class="<?php echo $pageId==2 ?'uk-active' :' '?>"><a href="aboutUs.php"> <i class="fas fa-users"></i> About us</a></li>
               <li class="<?php echo $pageId==3 ?'uk-active' :' '?>"><a href="events.php"> <i class="far fa-calendar-check"></i> Events</a></li>
               <li class="<?php echo $pageId==4 ? 'uk-active':' '?>"><a href="contact.php"> <i class="fas fa-phone-volume"></i> Contact us</a></li>
           </ul>
 
       <div class="uk-navbar-flip uk-hidden-small">
           <ul class="uk-navbar-nav">
               <li><a href="https://www.twitter.com"><i id="twitter" class="uk-icon-twitter"></i></a></li>
               <li><a href="https://www.facebook.com"><i id="facebook"class="uk-icon-facebook"></i></a></li>
               <li><a href="https://www.youtube.com"><i id="youtube"class="uk-icon-youtube-play"></i></a></li>
           </ul>
       </div>

       <a href="#small-menu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
       <div class="uk-navbar-content uk-navbar-center uk-visible-small">
           <a href="#"> <img width="129px" height="90px" style="background:transparent;" src="/Media/Logos/1.jpg"></a>
       </div>
   </div>
</nav>

<div id="small-menu" class="uk-offcanvas">
     <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
               <li class="<?php echo $pageId==1 ?'uk-active' :' '?>"><a href="index.php">Home</a></li>
               <li class="<?php echo $pageId==2 ?'uk-active' :' '?>"><a href="aboutUs.php">About us</a></li>
               <li class="<?php echo $pageId==3 ?'uk-active' :' '?>"><a href="events.php">Events</a></li>
               <li class="<?php echo $pageId==4 ? 'uk-active': ' '?>"><a href="contact.php">Contact us</a></li>
           </ul>
     
     </div>
</div>


