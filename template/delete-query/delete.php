<form class="ui form" action="process-delete.php" method="post">

    Delete a tuple from SupplierA using name

    </br>

    </br>

    <label>SupplierA</label>

    <?php

    include '../../connect.php'; $conn = OpenCon();

    $result = $conn->query("select name from SupplierA");

    echo "<select name='name'>";

    while ($row = $result->fetch_assoc())

    {

        unset($name);

        $name = $row['name'];

        echo '<option value="'.$name.'">'.'Name: '.$name.'</option>';
        // use '.' to append string

    }

    echo "</select>";

    ?>


    <input type="submit" value="Delete">

</form>