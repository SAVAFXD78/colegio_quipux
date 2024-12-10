<?php
$connect=mysqli_connect("localhost", "root", "", "bd_school_quipux") or die("Problemas en la conexión"); // or the correct database name

// Check connection - Good Practice!
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error()); // More informative error message

}
?>