
<?php


$dbc = mysqli_connect("sql6.freesqldatabase.com:3306", "sql6519008", "XuMYHxSkS4", "sql6519008");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "sql6519008";
$dbs = mysqli_select_db($dbc,$db );
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
$grade = $_POST['grade'];
$code = mysqli_real_escape_string($dbc, $_POST['code']);
$date = mysqli_real_escape_string($dbc, $_POST['date']);
$query = "Update link SET grade='$grade' where code='$code' ";
if(mysqli_query($dbc, $query)){
	header("Location: supervisor-report.php");
	die;
} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
?>