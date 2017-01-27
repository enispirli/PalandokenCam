<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifika extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
         $param['sertifikalar'] = $this->database_model->getList("sertifika");
        $this->load->view('normal/navbar');
        $this->load->view('normal/header');
        $this->load->view('normal/sertifika',$param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    

}
