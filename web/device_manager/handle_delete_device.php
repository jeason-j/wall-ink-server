<?php

    #Debug stuff
    #require_once("print_info.php");
    #printInfo($_GET);

    include 'dbconfig.php';
    $mysqli = mysqli_connect($server, $username, $password, "door-display");
    $sql_query="DELETE FROM devices WHERE device_id = $_GET[device_id]";
    if ($mysqli->query($sql_query) === TRUE) {
        header( "refresh: 5; url=/device_manager/view_devices.php");
        echo "Device deleted successfully; redirecting in 5 seconds";
    } else {
        echo "Error updating record: " . $mysqli->error;
        echo "<br>";
        echo $sql_query;
    }
?>