<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends BaseController {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['hakkimizda'] = $this->database_model->get("ayarlar", 2)[0];
        $this->load->view('normal/navbar');
        $this->load->view('normal/header', $this->headerParam);
        $this->load->view('normal/hakkimizda', $param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
