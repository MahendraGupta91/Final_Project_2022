<?php
if(!$conn){
    die("Sorry we failed".mysqli_connect_error());
}
else{
    echo "connection was succesfull";
}