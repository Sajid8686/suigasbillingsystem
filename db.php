<?php

$conn = mysqli_connect("localhost", "root", "", "simple");

if($conn){
    echo "Connection Successfull";
}
else{
    echo "No Connection";
}


?>