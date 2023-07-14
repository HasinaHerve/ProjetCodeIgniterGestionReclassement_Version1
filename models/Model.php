<?php

class Model extends CI_Model {
	public function insertPers($table)
	{
		$this->db->insert('personnel', $table);
	}
	public function insertR($table)
	{
		$this->db->insert('reclassement', $table);
	}
	public function insertU($table)
	{
		$this->db->insert('utilisateur', $table);
	}
	public function allPers()
	{
		return $perso=$this->db->get('personnel')->result_array();
	}
	public function allGrade()
	{
		return $grade=$this->db->get('grade')->result_array();
	}
	public function getGrade($grade)
	{
		$this->db->where('grade',$grade);
		return $grade=$this->db->get('grade')->row_array();
	}
	public function getR($im)
	{
		$this->db->where('im',$im);
		return $rec=$this->db->get('reclassement')->row_array();
	}
	public function getPers($im)
	{
		$this->db->where('im',$im);
		return $grade=$this->db->get('personnel')->row_array();
	}
	public function getU($im)
	{
		$this->db->where('im',$im);
		return $ut=$this->db->get('utilisateur')->row_array();
	}
	public function allUt()
	{
		return $ut=$this->db->get('utilisateur')->result_array();
	}
	public function getUt($im)
	{
		$this->db->where('im',$im);
		return $ut=$this->db->get('utilisateur')->row_array();
	}
	public function updatePers($im,$table)
	{
		$this->db->where('im',$im);
		$this->db->update('personnel',$table);
	}
	public function updateR($im,$tab)
	{
		$this->db->where('im',$im);
		$this->db->update('reclassement',$tab);
	}
	public function deleteP($im)
	{
		$this->db->where('im',$im);
		$this->db->delete('personnel');
	}
	public function deleteR($im)
	{
		$this->db->where('im',$im);
		$this->db->delete('reclassement');
	}
	public function deleteU($im)
	{
		$this->db->where('im',$im);
		$this->db->delete('utilisateur');
	}
	public function updateU($im,$tab)
	{
		$this->db->where('im',$im);
		$this->db->update('utilisateur',$tab);
	}
	public function getMsg($imU,$imR)
	{
		$this->db->where('im',$imU);
		$this->db->where('imR',$imR);
		$this->db->group_by('dateE');
		$this->db->order_by('heureE');
		return $ut=$this->db->get('message')->result_array();
	}
	public function getMsg1($imU,$imR)
	{
		$this->db->where('im',$imR);
		$this->db->where('imR',$imU);
		$this->db->group_by('dateE');
		$this->db->order_by('heureE');
		return $ut=$this->db->get('message')->result_array();
	}
}