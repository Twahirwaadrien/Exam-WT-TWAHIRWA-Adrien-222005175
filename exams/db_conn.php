<?php
$name="localhost";
$uname="root";
$password="";
$db_name="scs";
$conn=new mysqli($name,$uname,$password,$db_name);
if(!$conn){
    echo"connection Failed";
}