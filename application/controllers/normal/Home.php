<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 function _construct()
	{
        parent::_construct();

        $this->load->helper('url');

    }


	public function index()
	{
		$this->load->view('admin/navbar');
		$this->load->view('admin/header');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
		$this->load->view('admin/fix');

	
	}
}
