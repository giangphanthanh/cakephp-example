<?php
class WritersController extends AppController {

	var $name = 'Writers';

	function index() {
		$this->Writer->recursive = 0;
		$this->set('writers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid writer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('writer', $this->Writer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Writer->create();
			if ($this->Writer->save($this->data)) {
				$this->Session->setFlash(__('The writer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The writer could not be saved. Please, try again.', true));
			}
		}
		$books = $this->Writer->Book->find('list');
		$this->set(compact('books'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid writer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Writer->save($this->data)) {
				$this->Session->setFlash(__('The writer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The writer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Writer->read(null, $id);
		}
		$books = $this->Writer->Book->find('list');
		$this->set(compact('books'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for writer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Writer->delete($id)) {
			$this->Session->setFlash(__('Writer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Writer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
