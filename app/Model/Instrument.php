<?php 

class Instrument extends AppModel {
	public $name = 'Instrument';
	public $hasMany = array(
		'Participant' => array(
			'className' => 'Participant',
			'foreignKey' => 'Instrument_id'));

}