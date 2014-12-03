<?php	

class MusicalAgroupationsController extends AppController {
	public $helpers = array('Html','Form');
	public $components = array('RequestHandler');

	public function index() {

	}

	public function jsonResponseAgroupations() {
		//$this->request->onlyAllow('ajax');
		if($this->request->is('post')) {
			$id = $this->request->data['id'];
			$datos = $this->MusicalAgroupation->find('first',array(
				'conditions' => array('MusicalAgroupation.id' => $id)));
		}
		$this->set('data',$datos);
	}

	public function view() {
		if($this->request->is('post')) {

		} else {
			$this->set('agroupations',$this->MusicalAgroupation->find('all'));
		}

	}

	public function add() {
		$this->set('entities',$this->MusicalAgroupation->Entity->find('list',array(
			'fields' => array(
				'Entity.id',
				'Entity.name'
				)
			)
		));
		$this->set('seats',$this->MusicalAgroupation->Seat->find('list',array(
			'fields' => array(
				'Seat.id',
				'Seat.name'
				)
			)
		));
		if($this->request->is('post')) {
			$this->MusicalAgroupation->create();
			if($this->MusicalAgroupation->save($this->request->data)) {
				$this->Session->setFlash(__('La agrupacion ha sido guardada'));
			} else {
				$this->Session->setFlash(__('La agrupacion no ha sido guardada '));
			}
		}
	}
	

}