<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todolist extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('todolist_model');

	}
	function index(){
		$this->load->view('Todolist/bienvenido');
	}

}


?>