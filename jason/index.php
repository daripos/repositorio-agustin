<?php
$jdatos = file_get_contents('datos.json');
$jdatos = json_decode($jdatos, true);
echo"<ul>"
    foreach($datos['datos'] as $dato){
                  

echo"<li>";
echo"<h2>{$dato['nombre']}</h2>"; 
 echo "img src= {$dato['imagen']}'>";
echo"<p>{$dato['autor']}</p>";
echo"<p>{$dato['fecha']}</p>";
echo"</li>";
}
echo"</ul>>";
?>