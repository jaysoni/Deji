<?php

class MembersController extends AppController {

    public $components = array('Session');
    
    var $helpers = array('Html', 'Form','Csv'); 
		
		public function member_index() {
            $members = $this->Member->find('all');
            $this->set('members', $members);
         }
    
         public function member_add() {
                    if (!empty($this->data)) {
                    $this->Member->create($this->data);
                    if ($this->Member->save()) {
                    $this->Session->setFlash('The member has been saved');
                    $this->redirect(array('action' => 'member_add'));
                    } else {
                    $this->Session->setFlash
                    ('The member could not be saved. Please, try again.');
                    }
                    }
            }
                
            
            public function member_delete($id = null)
             {
                if (!$id) {
                $this->Session->setFlash('Invalid id for member');
                $this->redirect(array('action' => 'member_index'));
                }
                if ($this->Member->delete($id)) {
                $this->Session->setFlash('Member deleted');
                } else {
                $this->Session->setFlash(__('Member was not deleted',
                true));
                }
                $this->redirect(array('action' => 'member_index'));
             }



            function member_edit($id = null) {
                    if (!$id && empty($this->data)) {
                        $this->Session->setFlash('Invalid member');
                        $this->redirect(array('action' => 'member_index'));
                    }
                    if (!empty($this->data)) {
                        if ($this->Member->save($this->data)) {
                            $this->Session->setFlash('The member has been saved');
                            $this->redirect(array('action' => 'member_index'));
                        } else {
                            $this->Session->setFlash('The member could not be saved. Please, try again.');
                        }
                    }
                    if (empty($this->data)) {
                        $this->data = $this->Member->read(null, $id);
                    }
                }
                
    function member_view($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid member');
            $this->redirect(array('action' => 'member_index'));
        }
        $this->set('member', $this->Member->findById($id));
    }
	
	function export() 
{

    $this->set('members', $this->Member->find('all'));

    $this->layout = null;
    $this->autoLayout = false;
    Configure::write('debug','0');
}
}
?>