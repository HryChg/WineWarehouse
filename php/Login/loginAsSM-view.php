<?php
echo '
<form class="ui form" action="../../php/Login/loginAsSM.php" method="post">
    <h3>Login as Shipment Manager</h3>
    <p>
        <label for="user">Name:</label>
        <input type="text" name="user">
    </p>
    <p>
        <label for="pass">Password:</label>
        <input type="password" name="pass">
    </p>
    <input class="ui button" type="submit" value="Login">
</form>'
?>