<?php $t='admin'?>
<?php require 'bloques/_config.php'?>
<?php include_once 'bloques/_header.php';?>
<form action='admin.php' method='get'>
   <label>nombre <input type='text' name='nombre'></label>
   <label>tipo <input type='text' name='tipo'></label>
   <label>origen <input type='text' name='origen'></label>
   <label>alcohol <input type='number' name='alcohol'></label>
   <label>precio <input type='number' name='precio'></label>
   <input type="submit" value="guardar cerveza">
</form>



<?php include_once 'bloques/_footer.php';?>


/*if($nombre!==strip:tags($nombre)
 {  $nombre = htmlspecialchars($nombre,ENT:QUOTES; 'utf-8');
echo($nombre);                                         }