<?php 
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DBNAME","studentdatabase");

    $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die("Database Connection Failed!");

   
?>