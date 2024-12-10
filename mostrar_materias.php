<?php
include('connect.php');

// Eliminar materia si se recibe el ID por GET
if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    $sqlEliminar = "DELETE FROM register_subject WHERE id = $idEliminar";
    if (mysqli_query($connect, $sqlEliminar)) {
        echo "<script>alert('Usuario eliminado correctamente.'); window.location.href='mostrar_materias.php';</script>";
    } else {
        echo "Error al eliminar usuario: " . mysqli_error($connect);
    }
}

// Consulta base para obtener todas las materias
$sql = "SELECT * FROM register_subject";

// Buscar usuario si se envía el formulario
if (isset($_GET['buscar'])) {
    $busqueda = $_GET['busqueda'];
    $sql = "SELECT * FROM register_subject WHERE 
            id LIKE '%$busqueda%' OR 
            name LIKE '%$busqueda%'";
}

$result = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Materias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Lista de Materias</h2>

        <form class="form-inline" method="GET">
            <input style="position: absolute; top: 45px; right: 20rem;" type="text" class="form-control mr-sm-2" name="busqueda" placeholder="Buscar" value="<?php echo isset($_GET['busqueda']) ? $_GET['busqueda'] : ''; ?>">
            <button style="position: absolute; top: 45px; right: 15rem;" type="submit" class="btn btn-primary" name="buscar">Buscar</button>
            <a style="position: absolute; top: 45px; right: 5rem;" href="mostrar_usuarios.php" class="btn btn-secondary ml-2">Mostrar Todos</a>
        </form>
<br>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Encargado</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
                <a style="position: absolute; top: 45px; " href="index.php" class="btn btn-secondary ml-2">Salir</a>
            </thead>
            <tbody>
                <?php
                $result=mysqli_query($connect, $sql);
                if($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['cod']. "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['holder'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td>";
                        echo "<div class='btn-group'>";
                        echo "<a href='modificaruser.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Modificar</a>";
                        echo "<a href='?eliminar=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este usuario?\")'>Eliminar</a>";
                        echo "</div>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else{
                    echo "Error in the query: " . mysqli_error($connect);
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>