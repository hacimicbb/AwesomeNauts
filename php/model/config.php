<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    //prevents hackers from hacking into a session without logging in
    session_regenerate_id(true);

    $path = "/BahrudinHAwesomeNauts/php/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "awesomenauts_db";

    if(!isset($_SESSION["connection"])){
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
    /* This is the connection to the database? */