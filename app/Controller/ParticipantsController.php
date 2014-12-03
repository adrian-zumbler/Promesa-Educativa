<?php

class ParticipantsController extends AppController {
	public $helpers = array('Html','Form');

	public function index() {
		
	}

	public function view() {
		if($this->request->is('post')) {

		} else {
			$this->set('participants',$this->Participant->find('all'));
		}
	}

	public function jsonresponse() {
		$this->request->onlyAllow('ajax');
		if($this->request->is('post')) {
			$id = $this->request->data['id'];
			$datos = $this->Participant->find('first',array(
				'conditions' => array('Participant.id' => $id)));
		}

		$this->set('data',$datos);
	}
}