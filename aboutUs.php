<!DOCTYPE html>
<html lang="en">
<?php
$pageId=2;
 include dirname(__FILE__).'/includes/tools.php';
 printHead('About Us');

?>

<body>
   <!-- the navbar starts the here, the function is called form the file tool.php  -->
    <?php include dirname(__FILE__).'/includes/header.php';
    ?>
    <!-- the navbar end here -->
  <main class="bg-color">
    <div class="main-container">

         <h1 class="title"> This is our Community</h1>
       <div>
            <h3 class="sub-title">Our History</h3>
            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, dignissimos accusantium quas quisquam officiis blanditiis earum qui impedit alias vel sequi eos neque, sapiente eligendi magnam odio nam? Saepe mollitia eos modi! Iure facilis minus distinctio eum eos tempore nemo non reprehenderit quia voluptatibus quasi, ullam explicabo! Accusamus, molestiae rerum.</p>
       </div>
        
        <div>
            <h3 class="sub-title">Our Mission and Values</h3>
            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, dignissimos accusantium quas quisquam officiis blanditiis earum qui impedit alias vel sequi eos neque, sapiente eligendi magnam odio nam? Saepe mollitia eos modi! Iure facilis minus distinctio eum eos tempore nemo non reprehenderit quia voluptatibus quasi, ullam explicabo! Accusamus, molestiae rerum.</p>
        </div>
        <div>
             <h3 class="sub-title"> Our Team</h3>
             <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, dolore!</p>
    
        </div>
         <div class="ourteam">
        
 <div class="cards">   
    <!-- first card starts here -->
    <div class="uk-card uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="120" height="120" src="./Media/faces/face2.jpg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Liaison officer</h3>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    </div>
</div>
    
    <!-- first card finish here -->

        <!-- the second card starts here -->
    <div class="uk-card uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="120" height="120" src="./Media/faces/face1.jpg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Casher</h3>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    </div>
</div>
<!-- the second card finishes here -->
<!-- the thrid card starts here -->
<div class="uk-card uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="120" height="120" src="./Media/faces/face3.jpg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Community Leader</h3>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    </div>
</div>
<!-- the thrid card finishes here -->
<!-- the forth card starts here -->
<div class="uk-card uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="120" height="120" src="./Media/faces/face4.jpg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Events Coordinator</h3>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    </div>
</div>
<!-- the forth card finishes here -->   
    
</div>

    
    
    <!-- the containt of the page start here -->

</main>

    <!-- the containt of the page finishes here -->
   <?php include dirname(__FILE__).'/includes/footer.php';?>
  
</body>
</html>