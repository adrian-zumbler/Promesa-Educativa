<?php

class Participant extends AppModel {
	public $name = 'Participant';
	public $belongsTo = array(
		'Instrument' => array(
			'className' => 'Instrument',
			'foreignKey' => 'instrument_id' ),
		'MusicalAgroupation' => array(
			'className' => 'MusicalAgroupation',
			'foreignKey' => 'musical_agroupation_id'));

}