<?php

$host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname =ca_db";
   $credentials = "user =postgres password=123456";

   $db = new PDO( "pgsql:$host; $port; $dbname; $credentials" );
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
      $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );          
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
 
?>