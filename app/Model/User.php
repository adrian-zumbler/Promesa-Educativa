<?php
APP::uses('BlowfishPasswordHasher','Controller/Component/Auth');
class User extends AppModel {
	public $name = 'User';
	public $belongsTo = 'Group'; 

	public function beforeSave($options = array()) {
		if(isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
		}
		return true;
	}
}

