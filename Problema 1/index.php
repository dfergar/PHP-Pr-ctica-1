<?php
//Iniciar base de datos
include 'patron.php';


//Carga de funciones l�gicas
include 'modelo.php';

//Extrae de la base de datos id y descripcion y lo meto en un array
$lista=ListarTareas();

//Vamos a la vista
include 'form.php';


/*
//consulta
$sql='select descripcion from tbl_tareas';

//Ejecuci�n
$db->Consulta($sql);   

while ($reg=$db->LeeRegistro())
{
		echo $reg['descripcion'].'<br/>';
}

*/


?>