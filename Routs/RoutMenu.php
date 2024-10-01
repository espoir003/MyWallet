<?php

session_start();

if(!isset($_SESSION['id'])){
    header("location: login");
}


include_once('../view/menu.php');


?>