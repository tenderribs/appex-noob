<!DOCTYPE html>
<html>
    <head>
 <?php 
 require_once(__DIR__.'/metadata.php'); 
     ?>
    </head>
    <body>
      <?php
            //navbar
          require_once(__DIR__.'/kopfzeile.php');
          $page = isset($_GET["page"])?$_GET["page"]:'';
            //page content
            echo '<div class="section">';
          if ($page == '') {
            require_once(__DIR__.'/pages/zuhause.html');
          }
           else if ($page == 'funktionen') {
            require_once(__DIR__.'/pages/funktionen.html');
          }
           else if ($page == 'deBlog') {
            require_once(__DIR__.'/pages/deBlog.html');
          }
          echo '</div>';
      ?>      
      <?php require_once(__DIR__.'/footer.php');   ?>
    </body>
</html>