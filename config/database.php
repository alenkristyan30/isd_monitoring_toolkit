<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'denrfeeddb');
   $connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
   if (!$connect->connect_error) {
   } else {
       die("Connection Failed : " . $connect->connect_error);
   }
