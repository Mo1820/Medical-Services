<?php

    session_start();

    define("BURL","http://localhost/01-Projects/Medical_serv/");
    define("BURLA","http://localhost/01-Projects/Medical_serv/admin");
    define("ASSETS","http://localhost/01-Projects/Medical_serv/assets");


    define("BD",__DIR__);
    define("BDA",__DIR__."/admin");

    // database  
    
    require_once(BD."/functions/db.php");
    require_once(BD."/functions/validation.php");


?>