<?php 
/* 
this file contain config database assuming i am running mysql using "root" and password "" 
*/
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');
// try connecting to the database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// check the coonection
if($conn==false){
    dir('error: cannot connect'); 
}
?>