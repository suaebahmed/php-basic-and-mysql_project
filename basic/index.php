<?php
// -----------  constant variable  ---------
    define("msg","Hi developers",true);
// -------------------------- global variable -------------------;
$x = 100;
$y; // same have ro not

if(isset($y)){
    print_r("true");
}else{
    echo "false";
}

// if(isset($x))
// if(isset($y))
// if(empty($x))


// function fun(){
//     global $x;

//     echo $x;
//     echo "<h1>hello world</h1>";
// }
// function reallyFun(){
//     global $x;

//     echo $x;
//     echo "<br>";
// }
// fun();
// reallyFun();
// echo $x;
// echo "<hr>";
// // -------------------------- super global variable -------------------;
// // $_SERVER: 

// echo "<b>PHP_SELF: </b>".$_SERVER['PHP_SELF'];
// echo "<br>";
// echo "<b>SCRIPT_NAME: </b>".$_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo "<b>HTTP_USER_AGENT: </b>".$_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo "<br>";

// echo "<b>server_name: </b>",$_SERVER['SERVER_NAME'];
// echo "<br>";
// echo "<b>server_address: </b>",$_SERVER['SERVER_ADDR']; // address;
// echo "<br>";
// echo "<b>server_software: </b>",$_SERVER['SERVER_SOFTWARE'];
// echo "<br>";
// echo "<b>server_admin: </b>".$_SERVER['SERVER_ADMIN'];
// echo "<br>";

// echo "<br>";
// echo "<b>server: remote_address: </b>".$_SERVER['REMOTE_ADDR']; // address;
// echo "<br>";
// echo "<b>server: request_method: </b>".$_SERVER['REQUEST_METHOD'];
// echo "<br>";
// echo "<b>server: request_uri: </b>".$_SERVER['REQUEST_URI'];
// echo "<br>";


?>