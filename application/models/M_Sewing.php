<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sewing extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	//get sewing data from database
	public function listing()
	{
		$this->db->select('a.trnDate, a.styleCode, COUNT(a.SizeName) output, COUNT(b.SizeSort) as size');
		$this->db->from('dbo.lygSewingOutput a');
		// JOIN
		$this->db->join('dbo.lygStyleSize b', 'b.StyleCode = a.StyleCode', 'left');
		// END JOIN
		$this->db->group_by('a.TrnDate, a.StyleCode');
		$query	= $this->db->get();
		return $query->result();
	}
}
