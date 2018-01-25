<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todolist_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this-> load->database();
	}
	function crearActividad($data){
		$this-> db->insert('to_do',array('actividad'=>$data['actividad']));
	}
	function obtnerActividades(){
		$query = $this->db->get('to_do');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	function eliminarActividad($id){
		$query= "DELETE FROM to_do WHERE id = $id";
	    $this->db->query($query);

	}
}

?>