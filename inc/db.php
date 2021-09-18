<?php


$conn = mysqli_connect('localhost','root','','searchengine');
$query = "SELECT * FROM posts ";

$result = mysqli_query($conn,$query);

if(!$conn) {
    echo "Error" . mysqli_connect($conn);
}




?>