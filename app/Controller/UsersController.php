<?php

class UsersController extends AppController {
	public $helpers = array('Html', 'Form');

	public function beforeFilter() {
		parent::beforeFilter();
		
		
	}

	public function index() {
		$this->set('post', $this->User->Group->find('all'));
	}

	public function view() {
		
	}

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(
				'Somthing custom',
				'default',
				array(
					'class' => 'miclase'
					));
		}

	}

	public function register() {
		$this->set('groups', $this->User->Group->find('list',array(
			'fields' => array(
				'Group.id',
				'Group.name'
				)
				)
			)
		);
		if($this->request->is('post')) {
			$this->User->create();
			if($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario ha sido registrado con exito'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se ha podido guardar el usuario');
			}
			

		}

	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}




}