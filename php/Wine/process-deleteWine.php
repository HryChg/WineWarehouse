<?php

include_once '../../connect.php';

$brandName = $_POST['brandName'];
$wineID = $_POST['wineID'];
$regionName = $_POST['regionName'];

$conn = OpenCon();

$sql;
if (!empty($brandName)) {
    $sql = "DELETE from WineOrigin where wineID = 
                (SELECT wineID from WineB where brandName = '$brandName');
            DELETE from WineA where brandName = '$brandName'; 
            DELETE from WineB where brandName = '$brandName'";
} elseif (!empty($wineID)) {
    $sql = "DELETE from WineOrigin where wineID = '$wineID';
            DELETE from WineB where wineID = '$wineID'";
} elseif (!empty($regionName)) {
    
    // Attempts: TODO
    // $sql = "UPDATE WineB
    //         SET wineID = -1 
    //         WHERE wineID IN (SELECT wineID from WineOrigin 
    //                         where regionName = '$regionName');
    //         DELETE from WineOrigin where regionName = '$regionName';
    //         DELETE from WineB where wineID = -1;";

    // $sql = "CREATE VIEW ids AS (SELECT wineID from WineOrigin where regionName = '$regionName');
    //         DELETE from WineOrigin where regionName = '$regionName';
    //         DELETE from WineB where wineID IN (SELECT * FROM ids);";

    // $sql = "DELETE from WineOrigin where regionName = '$regionName';
    //         DELETE from WineB where wineID IN
    //             (SELECT wineID from WineOrigin where regionName = '$regionName');";
}

if ($conn->multi_query($sql) === TRUE) {

    echo "Record updated successfully";

} else {

    echo "Error updating record: " . $conn->error;

}
CloseCon($conn);

?>