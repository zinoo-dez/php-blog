<?php
define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpass', '');
define('dbname', 'weekday_school10am');
$connection = mysqli_connect(dbhost, dbuser, dbpass, dbname);
if (!$connection) {
    echo "db not found" . mysqli_connect_error();
    // die('here');
}