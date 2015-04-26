<?php	

class MusicalAgroupationsController extends AppController {
	public $helpers = array('Html','Form');
	public $components = array('RequestHandler');

	public function index() {

	}

	public function jsonResponseAgroupations() {
		$this->request->onlyAllow('ajax');
		if($this->request->is('post')) {
			$id = $this->request->data['id'];
			$datos = $this->MusicalAgroupation->find('first',array(
				'conditions' => array('MusicalAgroupation.id' => $id)));
		}
		$this->set('data',$datos);
	}

	public function view() {
		if($this->request->is('post')) {
			$name = $this->request->data['MusicalAgroupation']['Nombre'];
			$agroupations = $this->MusicalAgroupation->find('all',array(
				'conditions' => array('MusicalAgroupation.name LIKE' => $name .'%' )));
			$this->set('agroupations', $agroupations);

		} else {
			$this->set('agroupations',$this->MusicalAgroupation->find('all'));
		}

	}

	public function add() {
		$this->set('entities',_get_all_entities_in_list($this));
		$this->set('seats',_get_all_seat_in_list($this));
		if($this->request->is('post')) {
			$this->MusicalAgroupation->create();
			if($this->MusicalAgroupation->save($this->request->data)) {
				$this->Session->setFlash(__('La agrupacion ha sido guardada'));
				$this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('La agrupacion no ha sido guardada '));
			}
		}
	}

	public function edit($id = null) {
		$this->set('entities',_get_all_entities_in_list($this));
		$this->set('seats',_get_all_seat_in_list($this));
		if(!$id) {
			#throw new NotFoundException(__('Usuario Invalido'));
		}
		$agroupation =  $this->MusicalAgroupation->findById($id);
		$this->set('agroupation',$agroupation);

		 if ($this->request->is(array('post', 'put'))) {
        	$this->MusicalAgroupation->id = $id;
        if ($this->MusicalAgroupation->save($this->request->data)) {
            return $this->redirect(array('action' => 'view'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }
	

}
	public function delete($id) {
    if ($this->request->is('get')) {
    }

    if ($this->MusicalAgroupation->delete($id)) {
        
        return $this->redirect(array('action' => 'view'));
        $this->Session->setFlash(__('La agrupacion ha sido borrada'));
    }
}
}

	function _get_all_seat_in_list($object) {
		$seats;
		$seats = $object->MusicalAgroupation->Seat->find('list',array(
			'fields' =>array('id','name')
			)
		);
		return $seats; 
	}

	function _get_all_entities_in_list($object) {
		$entities;
		$entities = $object->MusicalAgroupation->Entity->find('list',array(
			'fields' => array('id','name')
			)
		);
		return $entities;
	}