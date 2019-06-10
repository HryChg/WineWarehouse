<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="./../../util/submitForm.js"></script>
<?php
// include '../../template/input-query/create-table.php';
include '../../util/Display-NavBar.php';
include '../../util/Display-IM-Header.php';
// include '../../connect.php';
// $conn = OpenCon();

setStyle();
?>
<body>



<?php displayNav("Inventory Manager")?>

<section id="Special Features">
<h1 class="ui header">Special Features</h1>

<div class="ui grid container">
    <div class="ui fluid two item menu container">
        <a class="item" href='../../php/IMQueries/process-queryTopSupplier.php'>Check Top Supplier</a>
        <a class="item" href='../../php/IMQueries/process-queryMaxPriceOfWineB.php'>Check Most Expensive Wine In Inventory</a>

    </div>
</div>
</section>


<!------------------------------------------------------------------------->
<section id="StoredIn" class="section center">
    <br>
    <h1 class="ui header">Current Wine Inventory</h1>
    <div class="container" id="storedin-table">
        <?php include '../../php/StoredIn/defaultView-storedin.php'; ?>
    </div>

    <div class="ui equal width relaxed grid">
            <div class="column"><?php include '../../php/StoredIn/insert-view.php'; ?></div>
            <div class="column"><?php include '../../php/StoredIn/updateQuantityInLoc.php'; ?></div>
            <div class="column"><?php include '../../php/IMQueries/queryLocationAndQuantityByWineID.php'; ?></div>
    </div>

</section>

<!------------------------------------------------------------------------->
<section id="Wine" class="section center">
    <h1 class="ui header">Wine List</h1>
    <div class="container" id="wine-table">
        <?php include '../../php/Wine/defaultView-wine.php'; ?>
    </div>
    
    <div class="ui equal width relaxed grid">
        <div class="column">
            <?php include '../../php/Wine/insert-view.php'; ?>
        </div>
        <div class="column">
            <?php include '../../php/Wine/updateWinePrice.php'; ?>
            <?php include '../../php/Wine/deleteWineAByBrand.php'; ?>
            <?php include '../../php/Wine/deleteWineBByBrandOrID.php'; ?>
            <?php include '../../php/WineOrigin/deleteWineOrigin.php'; ?>
        </div>
        <div class="column">
            <?php include '../../php/IMQueries/queryBrandFromWineAByGrape.php'; ?>
            <?php include '../../php/IMQueries/queryBrandFromWineAByWineTaste.php'; ?>
            <?php include '../../php/IMQueries/queryPriceFromWineBByID.php'; ?>
            <?php include '../../php/IMQueries/queryWineBByExpiryRange.php'; ?>
            <?php include '../../php/IMQueries/queryWineByAlcoholRange.php'; ?>
            <?php include '../../php/IMQueries/queryWineByAgriAttribute.php'; ?>
            <?php include '../../php/IMQueries/queryMinPriceByBrand.php'; ?>        
        </div>
    </div>

</section>

<!------------------------------------------------------------------------->
<section id="AgriculturalRegion" class="section center">
    <h1 class="ui header">Agricultural Regions of Wine in Stock</h1>
    <div class="container" id="agricultural-region-table">
        <?php include '../../php/AgriculturalRegion/defaultView-agriculturalRegion.php'; ?>
    </div>
    
    <div class="ui equal width relaxed grid">
        <div class="column">
            <?php include '../../php/AgriculturalRegion/updateRegionTemp.php'; ?>
            <?php include '../../php/AgriculturalRegion/updateMoisture.php'; ?>
            <?php include '../../php/AgriculturalRegion/updateClimate.php'; ?>
        </div>
        <div class="column">
            <?php include '../../php/AgriculturalRegion/deleteRegionByName.php'; ?>
        </div>
    </div>
    
</section>
<!------------------------------------------------------------------------->
<section id="Supplier" class="section center">
    <h1 class="ui header">Supplier Details</h1>
    <div class="container" id="supplier-table">
        <?php include '../../php/Supplier/defaultView-supplier.php'; ?>
    </div>

    <div class="ui equal width relaxed grid">
        <div class="column">
            <?php include '../../php/Supplier/insert-view.php'; ?>
        </div>
        <div class="column">    
            <?php include '../../php/Supplier/updateSupplierAAddress.php'; ?>
            <?php include '../../php/Supplier/updateSupplierBPhone.php'; ?>
        </div>
        <div class="column">
            <?php include '../../php/Supplier/deleteSupplierA.php'; ?>
            <?php include '../../php/Supplier/deleteSupplierBByIDOrPhone.php'; ?>
        </div>
    </div>

</section>

<!------------------------------------------------------------------------->
<section id="Restock" class="section center">
    <h1 class="ui header">Restock</h1>
    <div class="container" id="restock-table">
        <?php include '../../php/Restock/defaultView-restock.php'; ?>
    </div>

    <div class="ui equal width relaxed grid">
        <div class="column">
            <?php include '../../php/Restock/insert-view.php'; ?>
        </div>
    </div>

</section>

<!------------------------------------------------------------------------->
<section id="StorageArea" class="section center">
    <h1 class="ui header">Storage Temperature</h1>
    <div class="container" id="storage-area-table">
        <?php include '../../php/StorageArea/defaultView-storageArea.php'; ?>
    </div>

    <div class="ui equal width relaxed grid">
        <div class="column">
            <?php include '../../php/StorageArea/updateStorageTemp.php'; ?>
        </div>
    </div>
    
</section>

<!------------------------------------------------------------------------->
<?php CloseCon($conn); ?>

<footer class="section">
    <div class="center grey-text">Copyright 2019 WineWarehouse</div>
</footer>

</body>
</html>