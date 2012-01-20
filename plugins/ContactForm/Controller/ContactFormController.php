<?php
App::uses('CakeEmail', 'Network/Email');

/**
 * ContactFormController
 *
 * @author Corinna Knick
 */
class ContactFormController extends AppController {
	
	//Attributes
	var $layout = 'overlay';
	
   /**
	* Admin View
	*/
	public function admin($contentID) {
		$this->set('contentID', $contentID);
	}
	
   /**
	* Before-Filter
	*/
	public function beforeFilter() {		
		//Permissions
		$this->Auth->allow('*');
	}
}