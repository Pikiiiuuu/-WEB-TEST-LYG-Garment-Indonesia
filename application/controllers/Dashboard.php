<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	//creating dashboard controller
	public function index()
	{
		$data = array(	'title'		=> 'LYG Garment Indonesia | Administrator',
						'isi'		=> 'list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		
	}
}
