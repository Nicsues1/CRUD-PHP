<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operation");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

IF(!$connection){
    die("Connection Failed");
}

else{
    echo "nigg";
}

?> 