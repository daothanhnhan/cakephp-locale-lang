<?php 
class LangsController extends AppController {
	
	public function index(){
		CakeSession::write('Config.language', 'eng');
	}
	
	public function eng(){
		CakeSession::write('Config.language', 'eng');
		$this->render('index');
	}
	
	public function vie(){
		CakeSession::write('Config.language', 'vie');
		$this->render('index');
	}
}
?>