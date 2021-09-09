<?php
session_start();
// $dbHost='localhost';
// $dbname='mybeauty';
// $dbusername='root';
// $dbpassword=' ';
// $dbc=mysqli_connect($dbHost,$dbusername,$dbpassword,$dbname);
$connection=mysqli_connect('localhost','root');
if($connection)
{
    // echo "connection done";
}
else{
    // echo "error connection";
}
mysqli_select_db($connection,'mybeauty');
?>