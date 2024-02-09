<?php

try{
//host
define("HOST","Localhost");

//dbname
define("DBNAME", "anime");

//user 
define("USER" , "root");

//password
define("PASS" , "");

$conn = new PDO("mysql:host".HOST.";dbname=".DBNAME."",USER,PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($conn == true){
//     echo "dbconn is a successful";
// }else{
//     echo "error";
// }

} catch (PDOException $e) {
   echo $e->getmessege();
}
