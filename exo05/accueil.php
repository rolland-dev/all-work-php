<?php  
require_once('myincludes/i_need_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
    $titre = 'Accueil'; 
    require_once ('myincludes/html_head.php');
?>

<body onload="checkCookie();">

<div class="container">
        <?php  include_once('myincludes/myheader.inc.php');?>
  
        <div class="jumbotron">
          <h1 class="display-3">Bienvenue</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
        </div>    
        <?php  include_once('myincludes/myfooter.inc.php')?>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/blog.js"></script>
</body>

</html>