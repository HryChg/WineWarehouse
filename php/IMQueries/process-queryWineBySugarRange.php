<?php

include_once '../../connect.php';
include_once '../../template/input-query/create-table.php';
include '../../util/Display-IM-Header.php';
include '../../util/Display-NavBar.php';

$conn = OpenCon();

$lowRange = $_POST['lowRange'];
$highRange = $_POST['highRange'];

$sql1 = "SELECT wineID, brandName, grapeType1, grapeType2, sugarLevel
	FROM wineB
	WHERE sugarLevel >= '$lowRange' AND sugarLevel <= '$highRange'";

$sql2 = "SELECT COUNT(wineID) AS 'Number of Wine Types'
	FROM wineB
	WHERE sugarLevel >= '$lowRange' AND sugarLevel <= '$highRange'";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

setStyle();
displayNav("Inventory Manager");
echo "<h1>Wine Query Results</h1>";
if ($result1->num_rows > 0) {
    myTable($conn, $sql1);
} else {
    echo "0 results";
}
if ($result2->num_rows > 0) {
    myTable($conn, $sql2);
} else {
    echo "0 results";
}

CloseCon($conn);

?>