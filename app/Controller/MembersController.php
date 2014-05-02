<?php

class MembersController extends AppController {
	
    public $components = array('Session');
    
    var $helpers = array('Html', 'Form', 'Csv'); 
	
	//This function is use to show all members on front page
	public function index() {
		$members = $this->Member->find('all');
		$this->set('members', $members);
	}
	
	//This function is use to add new member
	public function add() {
		if (!empty($this->data)) {
			$this->Member->create($this->data);
			if ($this->Member->save()) {
				$this->Session->setFlash('The member has been saved');
				$this->redirect(array('action' => 'add'));
			}
			else {
				$this->Session->setFlash('The member could not be saved. Please, try again.');
			}
		}
	}
    
	//This function is use to delete a particular member whose id came in the $id variable as parameter 
	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for member');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Member->delete($id)) {
			$this->Session->setFlash('Member deleted');
		}
		else {
			$this->Session->setFlash(__('Member was not deleted', true));
		}
		$this->redirect(array('action' => 'index'));
	}
	
	//This function is use to edit a particular member's profile whose id came in the $id variable as parameter
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid member');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash('The member has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The member could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Member->read(null, $id);
		}
	}
    
	//This function is use to view a particular member's profile whose id came in the $id variable as parameter
    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid member');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('member', $this->Member->findById($id));
    }
	
	//this function is use to export data into a excel sheet
	function export() {
		$this->set('members', $this->Member->find('all'));
		$this->layout = null;
		$this->autoLayout = false;
		Configure::write('debug', '0');
	}
}