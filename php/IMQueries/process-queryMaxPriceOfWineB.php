<?php

include_once '../../connect.php';
include_once '../../template/input-query/create-table.php';
include '../../util/Display-IM-Header.php';
include '../../util/Display-NavBar.php';

    $conn = OpenCon();

    $sql = "SELECT wineID, brandName, grapeType1, grapeType2, price 
            FROM WineB AS p 
            INNER JOIN 
            ( SELECT MAX(price) AS max FROM WineB ) AS m 
            ON p.price = m.max";

    $result = $conn->query($sql);

    setStyle();
    echo "<body><div class='queryResult'>";
    echo "<h1>Most Expensive Wine</h1>";
    if ($result->num_rows > 0) {
        myTable($conn, $sql);
    } else {
        echo "<p>0 results</p>";
    }

    echo '<a class="ui button" href="../../ui/InventoryManager/index.php">Back</a>';
    echo "</div></body>";
    CloseCon($conn);

?>