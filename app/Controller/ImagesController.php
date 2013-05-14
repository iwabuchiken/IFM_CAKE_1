<?php
class ImagesController extends AppController {
	public $helpers = array('Html', 'Form');


	public function index() {
		$this->set('images', $this->Image->find('all'));
		
		//debug
		$this->_write_log(time(), basename(__FILE__), __LINE__);
		
// 		$this->set('__FILE__', "log.txt");
		$this->set('__FILE__', dirname(__FILE__)."\\log.txt");
		
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

	private function _write_log($text, $file_name, $line_number) {
		//     public function _write_log() {
			
		//REF http://www.artsnet.jp/archives/328
		//REF http://d.hatena.ne.jp/gapao/20090510/1242025196
		//REF http://cutfromthenorth.com/save-page-output-as-html-with-cakephp/
		// 		$fname = "C:/WORKS/WS/Cake/cakephp-2.3.1/app/log.txt";
// 		$fname = dirname(dirname(__FILE__));
// 		$fname = dirname(__FILE__)."log.txt";
		$fname = dirname(__FILE__)."\\log.txt";
		//     	$fname = "/log.txt";
			
		$file = new File($fname);
			
		$file->create();
			
		//     	$file->write("abcde\n", "a");
// 		$file->write("[$file_name:$line_number] $text\n\n", "a");

		if ($file->exists()) {
			
			$file->write("[$file_name:$line_number] \"a\" $text\n\n", "a");

		
		} else {
		
			$file->write("[$file_name:$line_number] \"w\" $text\n\n", "w");			
			
		}//if ($file->exists())
		//     	$file->write("abcde ".time()."\n", "a");
			
		$file->close();
			
		//     	$file.write("abcde", "w");
			
		//     	$file.close();
			
		//     	$file = fopen($fname, "w");
			
		//     	if( $file == false )
		//     	{
		//     		echo ( "Error in opening file" );
		//     		exit();
		//     	}
			
		//     	fwrite($file, "abcde\n");
			
		//     	fclose($file);
			
	}//public function _write_log() {
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Image->create();
			if ($this->Image->save($this->request->data)) {
				//debug
				// REF array size http://idea-tech.sakura.ne.jp/blog/2007/05/post_24.php
				//     			$this->_write_log(count($this->request->data), __FILE__, __LINE__);
				// REF basename http://php.net/manual/ja/function.basename.php
				$this->_write_log(
						"count(\$this->request->data)=".count($this->request->data),
						basename(__FILE__), __LINE__);	//=> 1
// 				$this->_write_log(
// 						get_class($this->request->data[0]),
// 						basename(__FILE__), __LINE__);	//=> ImagesController
				 
				 
				$this->Session->setFlash('Your post has been saved.');
				$this->redirect(array('action' => 'index'));
				 
			} else {
				$this->Session->setFlash('Unable to add your post.');
			}
		}//if ($this->request->is('post')) {
		 
	}//public function add() {
	
	public function show_image($file_name = null) {
		
		$this->set('file_name', $file_name);
		
	}//public function show_image($file_name = null)
	
}//class ImagesController extends AppController