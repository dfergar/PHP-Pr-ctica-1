<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lista inicio</title>
</head>
<body>
<h2>Lista de Tareas</h2>
<!--Leyenda de parámetros get para el controlador
1-Nueva Tarea
2-Buscar Tarea
3-Ver Tarea
4-Modificar Tarea
5-Borrar Tarea
6-Completar Tarea
-->

<a href="controlador.php?c=1><button>Nueva</button></a>
<a href="buscarTarea.php?c=2><button>Buscar</button></a>
<br><br>
<table style="width: 800px;">
	<tr style="text-align: left;">
		<th>Código</th>
		<th>Tarea</th>		
	</tr>
	<?php foreach($lista as $clave=>$valor) : ?>
	<tr>
		<td><?=$clave?></td>
		<td><?=$valor?></td>
		<td><a href="controlador.php?c=3&id=$clave">Ver Tarea</a></td>
		<td><a href="controlador.php?c=4&id=$clave">Modificar Tarea</a></td>
		<td><a href="controlador.php?c=5&id=$clave">Borrar Tarea</a></td>
		<td><a href="controlador.php?c=6&id=$clave">Completar Tarea</a></td>
	</tr>
	
	}
	?>
</table>
</body>
</html>
	

