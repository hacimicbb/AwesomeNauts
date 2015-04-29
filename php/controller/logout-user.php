<?php
    require_once(__DIR__ . "/../model/config.php");
/* This is the code that lets the user to logout. */    
    unset($_SESSION["authenticated"]);
    
    session_destroy();
    header("Location: " . $path . "index.php");

