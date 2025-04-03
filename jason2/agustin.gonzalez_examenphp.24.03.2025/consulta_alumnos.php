
// Código para consultar los alumnos registrados en la base de datos

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include 'conexion.php'; // Incluir la conexión

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Alumnos</title>
</head>
<body>
    <h2>Lista de Alumnos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php
        // Consulta SQL
        $sql = "SELECT id, nombre FROM alumnos";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["id"]) . "</td><td>" . htmlspecialchars($row["nombre"]) . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No hay alumnos registrados</td></tr>";
        }

        // Cerrar conexión
        $conn->close();
        ?>
    </table>
</body>
</html>