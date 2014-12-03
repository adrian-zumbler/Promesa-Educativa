<?php

class Seat extends AppModel {
	public $name = 'Seat';
	public $hasMany = array(
		'MusicalAgroupations' => array(
			'className' => 'MusicalAgroupation',
			'foreignKey' => 'seat_id')
		);
}