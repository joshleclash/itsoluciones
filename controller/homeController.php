<?php
include_once 'controller.php';
class homeController extends Controller{
	private $error;
	private $response;
	public function indexController($params=null){
			$this->render('index',array('hola'=>'Hola Mundo','chao'=>'Chao mundo'));
			
	}
	public function sumaController(){
		
	}
}


?>