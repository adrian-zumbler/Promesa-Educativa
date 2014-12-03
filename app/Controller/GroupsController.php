<?php

class GroupsController extends AppController {
	public $helpers = array('Html','Form');

	public function index() {
		$this->set('groups', $this->Group->find('all'));
	}

}