<?php

include_once '../../connect.php';
include_once '../../template/input-query/create-table.php';
include '../../util/Display-IM-Header.php';
include '../../util/Display-NavBar.php';

$conn = OpenCon();

$wineID = $_POST['wineID'];
$locationID = $_POST['locationID'];

$result;
if (!empty($wineID) && !empty($locationID)) {
    $sql = "SELECT wineID, locationID, quantityInLocation
	FROM StoredIn
    WHERE wineID = '$wineID' AND locationID = '$locationID'";
    $result = $conn->query($sql);
} elseif (!empty($wineID)) {
    $sql = "SELECT wineID, locationID, quantityInLocation
	FROM StoredIn
    WHERE wineID = '$wineID'";
    $result = $conn->query($sql);
} elseif (!empty($locationID)) {
    $sql = "SELECT wineID, locationID, quantityInLocation
	FROM StoredIn
    WHERE locationID = '$locationID'";
    $result = $conn->query($sql);
}

setStyle();
echo "<body><div class='queryResult'>";
echo "<h1>Wine Query Results</h1>";
if ($result->num_rows > 0) {
    myTable($conn, $sql);
} else {
    echo "<p>0 results</p>";
}

echo '<a class="ui button" href="../../ui/InventoryManager/index.php">Back</a>';
echo "</div></body>";
CloseCon($conn);

?>