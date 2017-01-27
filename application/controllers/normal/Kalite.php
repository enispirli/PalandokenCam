<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalite extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['kalitemiz'] = $this->database_model->get("ayarlar", 6)[0];
        $this->load->view('normal/navbar');
        $this->load->view('normal/header');
        $this->load->view('normal/kalite',$param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    

}
