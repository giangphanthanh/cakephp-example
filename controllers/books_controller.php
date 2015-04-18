<?php
class BooksController extends AppController {

	var $name = 'Books';

	// Phuong thuc bo qua nhung action khong muon login
	public function beforeFilter(){
		$this->Auth->allow('index');
	}

	function index() {
		// $this->Product->recursive = 0;
		// $this->set('products', $this->paginate());
		$book = $this->Book->getbooks();
		$this->set('books', $book);
	}

	public function search(){
		$notfound = false;
		// if (!empty($this->request->Data)){
			$keyword = $this->data['Book']['keyword'];
			$book = $this->Book->find('all', array(
					'conditions' => array(
							'title like' => '%'.$keyword.'%'
							)
				));
			if (!empty($book)) {
				$this->set('results', $book);
			}else{
				$notfound = true;
			}
		// }
		$this->set('notfound', $notfound);
	}

	public function latest_books(){

		$this->paginate = array(
			'limit' => 4
			);
		$book = $this->paginate();
		$this->set('books', $book);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('book', $this->Book->read(null, $id));

		$book = $this->Book->read(null, $id);
		// Hien thi thong tin comment
		$this->loadModel('Comment');
		$comments = $this->Comment->find('all', array(
			"conditions" => array("book_id" => $book['Book']['id']),
			'order' => array('Comment.created' => 'asc'),
			'contain' => array('User' => array('username'))
			));
		$this->set('comments', $comments);
		// Hien thi thong tin sach lien quan
		$related_books = $this->Book->find('all', array(
			'conditions' => array(
					'category_id' => $book['Book']['category_id'],
					'Book.id <>' => $book['Book']['id']
				),
			'limit' => 5,
			'order' => 'rand()',
			'contain' => array(
					'Writer' => array('name', 'slug')
				)
			));
		$this->set('related_books', $related_books);
	}

	function add() {
		if (!empty($this->data)) {
			$this->Book->create();
			if ($this->Book->save($this->data)) {
				$this->Session->setFlash(__('The book has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Book->Category->find('list');
		$writers = $this->Book->Writer->find('list');
		$this->set(compact('categories', 'writers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Book->save($this->data)) {
				$this->Session->setFlash(__('The book has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Book->read(null, $id);
		}
		$categories = $this->Book->Category->find('list');
		$writers = $this->Book->Writer->find('list');
		$this->set(compact('categories', 'writers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for book', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Book->delete($id)) {
			$this->Session->setFlash(__('Book deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Book was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
