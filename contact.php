<!DOCTYPE html>
<html lang="en">
<?php
$pageId=4;
 include dirname(__FILE__).'/includes/tools.php';
 printHead('ContactUs');

?>

<body>
   <!-- the navbar starts the here, the function is called form the file tool.php  -->
    <?php include dirname(__FILE__).'/includes/header.php';?>
    <!-- the navbar end here -->
  <div class="uk-container uk-container-center">  
   <main>
    <div class=" grid-2 bg-color contact-center">
         <!--  the form starts here -->
         <div class="form">
               <form action="sendEmail.php" method="post">
                  <p><span><label for="name">Name:</label></span> </p>
                  <input class="input" type="text" name="name" id="name" onkeyup="nameValidation();" placeholder="eg. First Last" required>
                  <p><span id="nameError"></span></p>
                  <p><span><label for="phone">Phone:</label></span></p>
                  <input class="input" type="text "name="phone"id="phone" onkeyup="phoneValidation();"placeholder="eg. 0450 442 424" required> 
                  <p><span id="phoneError"></span></p>
                  <p><span><label for="email">Email:</label></span></p>
                  <input  class="input" type="email" name="email" onkeyup="emailValidation();" id="email"placeholder="your email please" required>
                  <p><span id="emailError"></span></p>
                  <p><span><label for="message">Message:</label></span></p>
                  <textarea  name="message" onkeyup="messageValidation();" id="message" rows="10"cols="32"></textarea>
                  <p><span id="msg"></span></p>
                  <p><span><label for="rememberMe">Remember me:</label></span>
                  <input type="checkbox"name="remember"id="rememberMe"></p>
                  <br>
                  <div class="submit-button">
                     <p><input class="uk-button uk-button-primary uk-button-large"type="submit"name="submit" id="submit"value="submit"></p>
                     <br>
                     <p>By pressing the submit button you will agree to our <span><a href="#">terms and policies</a></span></p>
                  </div>
                  
               </form>
         </div>
               <!-- the form finish here -->
      <!-- the map section starts here -->
         <div class="map-address">
            <h1>Our address and other contact detials: </h1>
            <br><br><br>
            <img src="../Media/map.jpg" alt="Map picutre here">
            <br><br><br> <br>
            <p>Altaf Khan CEO:</p>
            <p>contact No: 0412 455 455</p>
            <p>Email address: <a href="mailto:exmaple@yahoo.com">example@yahoo.com</a> </p>
         </div>
         <p></p>
         <p></p>
         <p></p>
         <p></p>
      </div>
      
      </main>
   </div>
   <?php include dirname(__FILE__).'/includes/footer.php';?>
  
</body>
</html>