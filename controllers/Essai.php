<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essai extends CI_Controller {
	public function index()
	{
		$this->load->view('Essai_view/view');
	}
	public function retour()
	{
		if($this->input->post('ret')=="retour"){
			echo $this->input->post('ret');
		}
		else{
			echo "string";
		}
		
	}
	public function valider()
	{
		
		$this->load->model('Model');
		$table=array();
		$this->form_validation->set_rules('nom','Nom','required');
		if($this->form_validation->run()==false){
			$this->load->view('Essai_view/view');
		}
		else{
			$this->session->set_flashdata('alert','success');
			$table['nom']=$this->input->post('nom');
			$this->Model->insert($table);
			$this->load->view('Essai_view/view');
		}
		
		
	}
}
