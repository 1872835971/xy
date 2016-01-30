<?php 
     if (isSet($_GET["host"])) 
     { 
         $host = $_GET["host"]; 
         $ip = gethostbyname($host); 
         if ($ip != $host) die ($ip); 
     } 
     echo "dns is ok!"; 
 ?>  
 
