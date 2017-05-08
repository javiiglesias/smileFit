<?php
 
	$link=mysql_connect("localhost", "admin", "1234");
	mysql_select_db("smilefit",$link) OR DIE ("Error: No es posible establecer la conexión");
	mysql_set_charset('utf8');
	 
	$entrenamientos=mysql_query("SELECT * FROM entrenamiento'",$link);
	$dietas=mysql_query("SELECT * FROM dieta'",$link);
	 
	while($all = mysql_fetch_assoc($entrenamientos)){
	$e = array();
	$e['id'] = $all['Id'];
	$e['start'] = $all['FechaInicio'];
	$e['end'] = $all['FechaFin'];
	$e['title'] = $all['Descripcion'];
	$e['class'] = $all['clase'];
	$e['url'] = $all['url'];
	$result[] = $e;
	}

	while($all = mysql_fetch_assoc($dietas)){
	$e = array();
	$e['id'] = $all['Id'];
	$e['start'] = $all['FechaInicio'];
	$e['end'] = $all['FechaFin'];
	$e['title'] = $all['Descripcion'];
	$e['class'] = $all['clase'];
	$e['url'] = $all['url'];
	$result[] = $e;
	}
	 
	echo json_encode(array('success' => 1, 'result' => $result));
 
?>