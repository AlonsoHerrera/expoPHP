 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Actividades extends CI_Controller {


		function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('todolist_model');

	}
		function index(){
			$data['actividades'] = $this->todolist_model->obtnerActividades();
			$this->load->view('Todolist/bienvenido');
			$this->load->view('actividades/formulario');
			$this->load->view('actividades/actividades',$data);
		}

		function nuevo(){
	    $this->load->view('Todolist/bienvenido');
		$this->load->view('actividades/formulario');
		
	}
		function recibirDatos(){
			$datas = array(
				'actividad' => $this->input->post('actividad')
			);
			$this->todolist_model->crearActividad($datas);
			redirect('/actividades', 'refresh');
	}
	function borrar($id){
		$id= $this->uri->segment(3);
	    $this->todolist_model->eliminarActividad($id);

	    redirect('/actividades', 'refresh');
	}
}
?>