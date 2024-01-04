<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewing extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Sewing');
		$this->load->helper('url');
	}
	//creating sewing controller for displayng sewing list data
	public function index()
	{
		$sewing = [];

		$data = array(	'title'			=> 'Sewing List Data',
						'sewing'		=> $sewing,
						'isi'			=> 'sewing_list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		
	}
}
