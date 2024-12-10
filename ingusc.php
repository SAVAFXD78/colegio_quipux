<?php
	include("connect.php");

	$cod = $_POST['cod'];
	$nombre = $_POST['nombreMateria'];
	$profe = $_POST['profe'];
	$descripcion = $_POST['descripcion'];
	
	
	$stmt = $connect->prepare("INSERT INTO register_subject (cod, name, holder, description) VALUES (?, ?, ?, ?)");
	
	if ($stmt === false) {
		die("Error preparing statement: " . $connect->error);
	}
	
	
	$stmt->bind_param("ssss", $cod, $nombre, $profe, $descripcion); 
	
	
	if ($stmt->execute()) {
		echo "<script>alert('Materia registrada correctamente')</script>";
		header("Location: index.php");
		
		exit(); 
	} else {
		echo "Error: " . $stmt->error; 
	}
	
	$stmt->close();
?>