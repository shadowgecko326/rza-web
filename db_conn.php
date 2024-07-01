
<?php

$sname= "localhost";
$unmae= "root";
$password= "";
// this is the name of the database turned into a variable  // 
$db_name="test_db";
// this will connect the variable names in the database //
$conn= mysqli_connect($sname,$unmae,$password, $db_name);

if(!$conn){
    echo "connection failed!";
}
// make a database called test_db then insert the users.sql into it to test if needed // 