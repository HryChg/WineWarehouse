<script src="./../../php/Supplier/delete-submit-supplier-name.js"></script>
<form class="ui form" id="delete-supplier-name" url="../../php/Supplier/process-deleteSupplierA.php" method="post">

    <h3>Delete Supplier by Name (SupplierA)</h3>

    <p>
    <label>Supplier</label>

    <?php
    include_once '../../connect.php'; 
    $conn = OpenCon();
    $result = $conn->query("select name, address from SupplierA");

    echo "<select name='address'>";
    while ($row = $result->fetch_assoc())
    {
        unset($name, $address);
        $name = $row['name'];
        $address = $row['address'];
        echo '<option value="'.$address.'">'.'Name: '.$name.', Address: '.$address.'</option>';
    }
    echo "</select></p>";
    CloseCon($conn);
    ?>

    <input class="ui button delete-supplier-name" type="submit" value="Delete">

</form>