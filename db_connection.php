<?php 


$local_db = "localhost";
$unname = "root";
$password = "";
$db_name = "3a";

$conn = mysqli_connect ($local_db, $unname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
else {
    echo "Connection success!";
}

?>