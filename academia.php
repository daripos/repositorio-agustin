
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
              font-size:x-large;
               color:orange;
               font-family: arial;
        }

    </style>
</head>
<body>
<?php
// Crear un array de alumnos
$alumnos = [
    [
        'nombre' => 'Juan Pérez',
        'curso' => 'Matemáticas'
    ],
    [
        'nombre' => 'Ana García',
        'curso' => 'Historia'
    ],
    [
        'nombre' => 'Luis García',
        'curso' => 'Física'
    ],
    [
        'nombre' => 'María López',
        'curso' => 'Química'
    ],
];

// Mostrar los datos de cada alumno
foreach ($alumnos as $alumno) {
    echo $alumno['nombre']." estudia ".$alumno['curso'] . "<br>";

}

for(i=0;i<count($alumnos); i++)


{



    
}


?>
</body>
</html>