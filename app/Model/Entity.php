<?php

class Entity extends AppModel {
	public $name = 'Entity';
	public $hasMany = array(
		'MusicalAgroupations' => array(
			'className' => 'MusicalAgroupation',
			'foreignKey' => 'entity_id')
		);

}