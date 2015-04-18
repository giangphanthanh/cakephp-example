<?php
class BooksWritersController extends AppController {

	var $name = 'BooksWriters';

	function index() {
		$this->BooksWriter->recursive = 0;
		$this->set('booksWriters', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid books writer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('booksWriter', $this->BooksWriter->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BooksWriter->create();
			if ($this->BooksWriter->save($this->data)) {
				$this->Session->setFlash(__('The books writer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The books writer could not be saved. Please, try again.', true));
			}
		}
		$books = $this->BooksWriter->Book->find('list');
		$writers = $this->BooksWriter->Writer->find('list');
		$this->set(compact('books', 'writers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid books writer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BooksWriter->save($this->data)) {
				$this->Session->setFlash(__('The books writer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The books writer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BooksWriter->read(null, $id);
		}
		$books = $this->BooksWriter->Book->find('list');
		$writers = $this->BooksWriter->Writer->find('list');
		$this->set(compact('books', 'writers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for books writer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BooksWriter->delete($id)) {
			$this->Session->setFlash(__('Books writer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Books writer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
