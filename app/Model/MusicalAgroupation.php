<?php

class MusicalAgroupation extends AppModel {
	 public $name = 'MusicalAgroupation';
	 public $belongsTo = array(
	 	'Entity' => array(
	 		'className' => 'Entity',
	 		'foreignKey' => 'entity_id'),
	 	'Seat' => array(
	 		'className' => 'Seat',
	 		'foreignKey' => 'seat_id'));
	 public $hasMany = array(
	 	'Participant' => array(
	 		'className' => 'Participant',
	 		'foreignKey' => 'musical_agroupation_id'));
	


}