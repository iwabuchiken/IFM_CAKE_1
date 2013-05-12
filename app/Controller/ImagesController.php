<?php
class ImagesController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('images', $this->Image->find('all'));
			
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid image'));
		}

		$image = $this->Image->findById($id);
		if (!$image) {
			throw new NotFoundException(__('Invalid image'));
		}
		$this->set('image', $image);
	}//public function view($id = null)

}//class ImagesController extends AppController