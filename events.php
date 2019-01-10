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

    <main class="bg-color">
        <h1 class="lg-heading"> Our Events and Programs </h1>
        <h2 class="sm-heading">check out some of our Events and Programs</h2>

        <div class="events ">
            <div class="item">
                <a href="#">
                <img src="../Media/1.jpeg" alt="project 1"></a>
                <a href="#" class="btn-light">
                <i class="fas fa-eye"></i>Project</a>
                <a href="#" class="btn-dark">
                <i class="fas fa-github"></i>GitHub</a>
            </div>
            
            <div class="item">
                <a href="#">
                <img src="../Media/1.jpeg" alt="project 1"></a>
                <a href="#" class="btn-light">
                <i class="fas fa-eye"></i>Project</a>

                <a href="#" class="btn-dark">
                <i class="fas fa-github"></i>GitHub</a>
            </div>
            <div class="item">
                <a href="#">
                <img src="../Media/1.jpeg" alt="project 1"></a>
                <a href="#" class="btn-light">
                <i class="fas fa-eye"></i>Project</a>

                <a href="#" class="btn-dark">
                <i class="fas fa-github"></i>GitHub</a>
            </div>
            <div class="item">
                <a href="#">
                <img src="../Media/1.jpeg" alt="project 1"></a>
                <a href="#" class="btn-light">
                <i class="fas fa-eye"></i>Project</a>

                <a href="#" class="btn-dark">
                <i class="fas fa-github"></i>GitHub</a>
            </div>
            <div class="item">
                <a href="#">
                <img src="../Media/1.jpeg" alt="project 1"></a>
                <a href="#" class="btn-light">
                <i class="fas fa-eye"></i>Project</a>

                <a href="#" class="btn-dark">
                <i class="fas fa-github"></i>GitHub</a>
            </div>
        </div>
    </main>

    <!-- the containt of the page finishes here -->
   <?php include dirname(__FILE__).'/includes/footer.php';?>
  
</body>
</html>