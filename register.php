<?php
include("connect.php");


$dni = $_POST['dni'];
$name = $_POST['name'];
$last_name = $_POST['family_name'];
$role_id = $_POST['role_id'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];



$stmt = $connect->prepare("INSERT INTO register_user (dni, name, last_name, email, phone, password, role_id) VALUES (?, ?, ?, ?, ?, ?, ?)");



if ($stmt === false) {
    die("Error preparing statement: " . $connect->error);  
}


$stmt->bind_param("sssssss", $dni, $name, $last_name, $email, $phone, $password, $role_id); 


if ($stmt->execute()) {
    echo "<script>alert('Materia registrada correctamente')</script>";
    header("Location: index.php");
    
    exit(); 
} else {
    echo "Error: " . $stmt->error; 
}

$stmt->close(); 
?>
