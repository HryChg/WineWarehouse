
<h4>View All Shipping Manager</h4>

<?php
// Top 10 Most Recent Order (Latest --> Oldest)
$sql = "
  SELECT employeeID, type, name
  FROM Employee
  WHERE type='ShippingManager'
  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Table is scrollable when data is large
    echo "
    <table class='container responsive-table centered'>
        <tr>
            <th class='border-class'>employeeID</th>
            <th class='border-class'>type</th>
            <th class='borderclass'>name</th>
            
        </tr>
        ";

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td class='borderclass'>" . $row["employeeID"] . "</td>
            <td class='borderclass'>" . $row["type"] . "</td>
            <td class='borderclass'>" . $row["name"] . "</td>
        </tr>";
    }
    echo "</table>";


} else {
    echo "0 results";
}

?>