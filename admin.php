<?php 

$db_name = "nexelit";
$db_username = "root";
$db_host = "localhost";
$db_password = "";

$db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    // set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$res =  $db->query("INSERT INTO `admins` SET email='admin@digimo.se',name='Super Admin',username='super_admin',email_verified='".'1'."',role='".'1'."',image='".null."',password='". password_hash("12345678", PASSWORD_BCRYPT)."',remember_token='".null."',created_at='". date('Y-m-d h:i:s')."',updated_at='".date('Y-m-d h:i:s')."'");
echo "<pre>";
print_r($res);