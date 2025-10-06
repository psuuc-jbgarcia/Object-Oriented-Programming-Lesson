<?php 
//fetch the json data
$users=json_decode(file_get_contents("users.json"),true);

foreach($users as $user){
    echo $user["password"];
}

//insert data in json
$users[]=[
"username"=>"newUser",
 "password"=>password_hash("jerico123",PASSWORD_DEFAULT)
 

];

file_put_contents("users.json",json_encode($users,JSON_PRETTY_PRINT));
?>