<?php
	print_r($datos);
	foreach ($datos as $data) {
		unset($data['MusicalAgroupation']['name']);

	}
	//echo json_encode(compact('datos'));