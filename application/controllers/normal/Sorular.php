<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sorular extends Base_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['sorular'] = $this->Database_Model->getList("sorular");
        $this->load->view('normal/navbar');
        $this->load->view('normal/header',$this->headerParam);
        $this->load->view('normal/sorular',$param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
