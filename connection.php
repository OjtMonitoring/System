<?php

$dbhost = "sql6.freesqldatabase.com:3306";
$dbuser = "sql6519008";
$dbpass = "XuMYHxSkS4";
$dbname = "sql6519008";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
