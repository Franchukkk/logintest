
<?php
    $login = $_POST["login"];
    $password = $_POST["password"];
    if ($login === "admin" && $password === "111"){
        echo "<h1>Hello Admin</h1>";
    }else {
        echo "<h2>Введені дані невірні</h2>";
    }
?>  