
<h1>Lista de Tareas<h2>
<body>
<table>
	<?php 
	foreach($lista as $clave=>$valor)
	{
		echo "<tr>";
			echo "<td>".$clave."</td>";
			echo "<td>".$valor."</td>";
			echo "<td><a href=\"VerTarea.php?id=$clave\">Ver Tarea</a></td>";
			echo "<td><a href=\"SetTarea.php?id=$clave\">Modificar Tarea</a></td>";
			echo "<td><a href=\"DelTarea.php?id=$clave\">Borrar Tarea</a></td>";
		echo "</tr>";
	
	}
	?>
</table>
</body>
	

