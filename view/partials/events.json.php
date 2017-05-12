<?php
 
	$link=mysql_connect("localhost", "marta", "1234");
	mysql_select_db("smilefit",$link) OR DIE ("Error: No es posible establecer la conexión");
	mysql_set_charset('utf8');
	 
	$eventos=mysql_query("SELECT * FROM eventos",$link);
	 
	while($all = mysql_fetch_assoc($eventos)){
	$e = array();
	$e['Id'] = $all['Id'];
	$e['FechaInicio'] = $all['FechaInicio'];
	$e['FechaFin'] = $all['FechaFin'];
	$e['Descripcion'] = $all['Descripcion'];
	$e['Clase'] = $all['Clase'];
	$e['Url'] = $all['Url'];
	$e['ClienteId'] = $all['ClienteId'];
	$e['TrabajadorId'] = $all['TrabajadorId'];
	$result[] = $e;
	}

	/*tipos de class:
	
		event-warning
		event-success
		event-info
		event-inverse
		event-special
		event-important
	*/	
	 
	echo json_encode(array('success' => 1, 'result' => $result));
 
?>