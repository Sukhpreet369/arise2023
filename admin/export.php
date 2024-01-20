<?php 
$class=$_GET['class'];
$conn = mysqli_connect("localhost", "dhwdohem_pace", "Pass@123#@", "dhwdohem_pace");
//$conn = mysqli_connect("localhost", "root", "", "paceinstitute_in");
$filename = $class.".csv";
$fp = fopen('php://output', 'w');

$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='paceinstitute_in' AND TABLE_NAME='$class'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT * FROM $class";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>