<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test";

$conn = mysqli_connect("localhost", "root", "", "test");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}