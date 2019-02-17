<!DOCTYPE html>
<html lang="en">
<?php
$pageId=3;
 include dirname(__FILE__).'/includes/tools.php';
 printHead('Events');

?>

<body>
   <!-- the navbar starts the here, the function is called form the file tool.php  -->
    <?php include dirname(__FILE__).'/includes/header.php';
    ?>
    <!-- the navbar end here -->
  
    
    <!-- the containt of the page start here -->
<div class="uk-container uk-container-center">
    <main class="bg-color">
        <h1 class="lg-heading"> Our Events and Programs </h1>

        <div class="events ">
             <div class="item">
                 <h3 class="event-title">Community Support</h3>
                <a href="communitySupport.php">
                <img src="./Media/eventsPics/support.jpg" alt="classes picture here"></a>
                <p class="item-left">The community is actively involved in arranging meeting, seminars and workshop for the community members to raise awareness regarding different topics in the community. Such as:
                    <ol>
                        <li>Family Violence workshop</li>
                        <li>West-Justice seminar</li>
                        <li>local council meetings</li>
                    </ol>  </p>
                <a href="communitySupport.php" class="uk-button uk-button-primary">Read more</a>
            </div>
            
            <div class="item">
                 <h3 class="event-title">Classes</h3>
                <a href="#">
                <img src="./Media/eventsPics/class.jpg" alt="classes picture here"></a>
                <p class="item-left">The community is providing good opportunity for the families with kids. Kids, can learn their first language and attend cultural awareness classes alongside Dari classes.</p> 
                <p>These classes are held at least once a week. Kids will be able to read and write in their first language, and will also get more information about their culture and tradition.  </p>
        
                <a href="#" class="uk-button uk-button-primary">Read more</a>
            </div>
            <div class="item">
                <h3 class="event-title">Events</h3>
                <a href="#">
                <img src="./Media/eventsPics/events.jpg" alt="project 1"></a>
                <p class="item-left">The community facilitates cultural, traditional and religious events as following:
                    <ol>
                        <li>Now-Roz Event(cultural)</li>
                        <li>Eid Event(cultural)</li>
                        <li>Moharam (religious)</li>
                        <li>Shaban (religious)</li>
                    </ol>
                 </p>
                 <br>
                <a href="#" class="uk-button uk-button-primary">Read more</a>
            </div>
            <div class="item">
            <h3 class="event-title">Volunteering</h3>
                <a href="#">
                <img src="./Media/eventsPics/volunteer.jpg" alt="Volunteer picture here"></a>
                <p class="item-left">The community has referred two community members to co-health, where they can be a bridge between the community members and the organization (co-health). </p><p>The volunteers works and then will arrange workshops and seminars for the community members to raise awareness in the community. Furthermore, the community actively  involving other members to other organizations too. </p>
                <a href="#" class="uk-button uk-button-primary">Read more</a>
            </div>
            <div class="item">
                 <h3 class="event-title">Activities</h3>
                <a href="activites.php">
                <img src="./Media/eventsPics/activities.jpg" alt="Activites picture here"></a>
                <p class="item-left">The community arranges Varity of activities for the community members, in the meantime the community leader and other volunteers compile a list of different activities which takes place in the western suburbs specially in the Brimbak community and then distributes the list amongst the community members.</p>
                <br><br> <br>
                <a href="activites.php" class="uk-button uk-button-primary">Read more</a>
            </div>

            <div class="item">
                 <h3 class="event-title">Sports</h3>
                <a href="#">
                <img src="./Media/eventsPics/sports.jpg" alt="sports picture here"></a>
                <p class="item-left">Hazara Brimbank Community motivates the community members to activitly participate in physical activities and practice health life style. <br>
                 The community formed a soccer team, volleyball team and a badminton team. Moreover, the community has strong connection with the local sports centres to arrange sports events for cheaper prices for the community members.</p>
                 <br>
                <a href="#" class="uk-button uk-button-primary">Read more</a>
            </div>
        </div>
    </main>
</div>
   

    <!-- the containt of the page finishes here -->
   <?php include dirname(__FILE__).'/includes/footer.php';?>
  
</body>
</html>

