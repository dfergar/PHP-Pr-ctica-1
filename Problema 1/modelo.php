<?php
//Devuelve array con el id y la descripcion de cada una de las tareas
function ListarTareas()
{	
	//instanciamos y nos conectamos
	$db = Database::getInstance();
	
	$tareas= array();
	$sql ='select id_tarea as Codigo, descripcion as Tarea from tbl_tareas';
	
	$db->Consulta($sql);
	while ($fila = $db->LeeRegistro())
	{
		$tareas[$fila['Codigo']]=$fila['Tarea'];
	}
	$db->cerrar();
	return $tareas;
}




/*function nuevaTarea()
{
	include 'formNuevaTarea';
	
	$db->connect();
	$insertar = msqli_query ($thi)
}*/


?>


