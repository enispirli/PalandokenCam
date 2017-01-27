<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sorular extends BaseController {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['sorular'] = $this->database_model->getList("sorular");
        $this->load->view('normal/navbar');
        $this->load->view('normal/header',$this->headerParam);
        $this->load->view('normal/sorular',$param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
