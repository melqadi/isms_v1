<?php
if(!isset($_GET["mod"])){  include '../IndexController.php';     }

ob_start(); session_start(); 
session_destroy();
?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>"/>
              <?php



echo $logout; 



?>