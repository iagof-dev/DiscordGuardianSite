<?php
//MySql Configuration
$db_ip="";
$db_port="3306";
$db_user="";
$db_pass="";
$db_database="DiscordGuardian";
$db_table="allowedUsers";
$db;

try{
    $db = new mysqli($db_ip, $db_user, $db_pass, $db_database, $db_port);
    $com = "insert into ". $db_table. " values (default, null, '". $_POST['nickname']. "', true);";
    $enviar = mysqli_query($db, $com);
    header('location: ./success.php');
}
catch(Exception $e){
    echo $e;
}



?>