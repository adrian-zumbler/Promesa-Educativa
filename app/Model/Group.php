<?php

class Group extends AppModel {
	public $name = 'Group';
	public $hasMany = array(
		'Group' => array(
			'className' => 'User'
			)
		);


}