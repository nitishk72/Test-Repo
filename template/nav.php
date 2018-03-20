<?php
if(isset($_SESSION["loggedin"])){
    include 'template/nav_2.php';
}else{
    include 'template/nav_1.php';
}
?>