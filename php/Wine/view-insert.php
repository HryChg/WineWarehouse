<?php
echo '<form action="insert.php" method="post">
    <h1>Add Wine</h1>
    <p>
        <label for="wineid">Wine Barcode:</label>
        <input type="text" name="wineid" id="wineid">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
    </p>
    <p>
        <label for="color">Color:</label>
        <input type="text" name="color" id="color">
    </p>
    <p>
        <label for="brand">Brand Name:</label>
        <input type="text" name="brand" id="brand">
    </p>
    <p>
        <label for="year">Year:</label>
        <input type="text" name="year" id="year">
    </p>
    <p>
        <label for="grape1">Grape Type 1:</label>
        <input type="text" name="grape1" id="grape1">
    </p>
    <p>
        <label for="grape2">Grape Type 2:</label>
        <input type="text" name="grape2" id="grape2">
    </p>
    <p>
        <label for="taste1">Wine Taste 1:</label>
        <input type="text" name="taste1" id="taste1">
    </p>
    <p>
        <label for="taste2">Wine Taste 2:</label>
        <input type="text" name="taste2" id="taste2">
    </p>
    <p>
        <label for="alcohol">Alcohol (%):</label>
        <input type="text" name="alcohol" id="alcohol">
    </p>
    <p>
        <label for="acid">Acidity (pH):</label>
        <input type="text" name="acid" id="acid">
    </p>
    <p>
        <label for="sugar">Sugar (from 0-1):</label>
        <input type="text" name="sugar" id="sugar">
    </p>
    <p>
        <label for="expiry">Expiry Date (YYYY-MM-DD):</label>
        <input type="text" name="expiry" id="expiry">
    </p>
    <p>
        <label for="region">Region:</label>
        <input type="text" name="region" id="region">
    </p>
    <p>
        <label for="temperature">Temperature:</label>
        <input type="text" name="temperature" id="temperature">
    </p>
    <p>
        <label for="moisture">Moisture:</label>
        <input type="text" name="moisture" id="moisture">
    </p>
    <p>
        <label for="climate">Climate:</label>
        <input type="text" name="climate" id="climate">
    </p>
    <input type="submit" value="Add">
</form>'
?>