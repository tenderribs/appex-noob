<!DOCTYPE html>
<html>
    <head>
 <?php 
 require_once(__DIR__.'/metaData.php');   
 ?>
    </head>
    <body>
      <?php
            //navbar
          require_once(__DIR__.'/header.php');
          $page = isset($_GET["page"])?$_GET["page"]:'';
            //page content
        echo '<div class="section">';
          if ($page == '') {
            require_once(__DIR__.'/pages/home.html');
          }
           else if ($page == 'features') {
            require_once(__DIR__.'/pages/features.html');
          }
           else if ($page == 'blog') {
            require_once(__DIR__.'/pages/blog.html');
          }
          echo '</div>';
      ?>
      <?php require_once(__DIR__.'/footer.php');   ?>
    </body>
</html>