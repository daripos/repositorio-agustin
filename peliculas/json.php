<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Cargar el archivo JSON
$jsonData = file_get_contents('peliculas.json');
$peliculas = json_decode($jsonData, true);

// Verificar si se cargaron las películas
if ($peliculas === null) {
    echo "Error al cargar las películas.";
    exit;
}

// Mostrar las películas

echo '<ul class="peliculas">';
foreach($peliculas['peliscartelera'] as $pelicula) {

echo "<li><h2>{$pelicula['titulo']}</h2>
<p>{$pelicula['anio']}</p>
<img src='{$pelicula['poster']}' alt='{$pelicula['anio']}'>
</li>";
} 
echo "</ul>"; 
?>
</body>
</html>