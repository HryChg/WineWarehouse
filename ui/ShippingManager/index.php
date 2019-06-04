<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Shipping Manager User Interface</title>
    <style type="text/css">
        .brand {
            background: #cbb09c !important; /*important trumps all other CSS rules, avoid using this as much as you can*/
        }

        .brand-text {
            color: #cbb09c !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

    </style>

</head>
<body class="grey lighten-4">

<div class="container"></div>


<nav class="white z-depth-0">
    <div class="container">
        <!--"brand-text" is from our own css file-->
        <a href="#" class="brand-logo brand-text">Shipping Manager UI</a>
        <ui id="nav-mobile" class="right hide-on-small-and-down">

            <!--"brand" is from our own css file-->
            <li><a hred="#" class="btn brand z-depth-0">Log Out</a></li>
        </ui>
    </div>
</nav>


<section class="center">
    <h5>Special Features</h5>
    <div class="row">
        <a href="#" class="waves-effect waves-light btn brand">Top 10 Repeat Order on Wine</a>
        <a href="#" class="waves-effect waves-light btn brand">Top 10 Wines Every Retailer Likes</a>

    </div>
    <div class="row">
        <a href="#" class="waves-effect waves-light btn brand">Top 5 BackOrdered Wine</a>
    </div>



    <h4>Most Recent Order</h4>

    <div class="container">
        <?php include '../../php/OrderReceived/RenderOrderTable.php'?>
    </div>

</section>




<footer class="section">
    <div class="center grey-text">Copyright 2019 WineWarehouse</div>
</footer>

</body>
</html>