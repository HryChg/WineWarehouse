<!-- Wine (with WineOrigin) 
** SQL has no FULL JOIN thus must use UNION**-->


<?php

include_once '../../connect.php';
include_once '../../template/input-query/create-table.php';

$conn = OpenCon();

// $sql = "SELECT b.*, a.wineTaste1, a.wineTaste2, o.year, o.regionName
//         FROM WineA a 
//         JOIN WineB b 
//         ON a.grapeType1 = b.grapeType1 AND a.grapeType2 = b.grapeType2 AND a.brandName = b.brandName 
//         JOIN WineOrigin o ON b.wineID = o.wineID";

$sql = "SELECT b.wineID, b.price, b.color, a.brandName, a.grapeType1, a.grapeType2, a.wineTaste1, a.wineTaste2, b.alcoholPercent, b.acidity, b.sugarLevel, b.expiryDate, o.year, o.regionName
        FROM WineA a 
        LEFT JOIN WineB b 
        ON a.grapeType1 = b.grapeType1 AND a.grapeType2 = b.grapeType2 AND a.brandName = b.brandName
        LEFT JOIN WineOrigin o ON b.wineID = o.wineID
        UNION
        SELECT b.wineID, b.price, b.color, b.brandName, b.grapeType1, b.grapeType2, a.wineTaste1, a.wineTaste2, b.alcoholPercent, b.acidity, b.sugarLevel, b.expiryDate, o.year, o.regionName
        FROM WineA a 
        RIGHT JOIN WineB b 
        ON a.grapeType1 = b.grapeType1 AND a.grapeType2 = b.grapeType2 AND a.brandName = b.brandName 
        LEFT JOIN WineOrigin o ON b.wineID = o.wineID
        ORDER BY wineID;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<div class='table-container'>";
	myTable($conn, $sql);
	echo "</div>";
} else {
	echo "<p>0 results</p>";
}

CloseCon($conn);

?>