<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Urun extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    function _remap($param) { //parametre atandığında çalış
        $this->index($param);
    }

    public function index($id) {
        $this->load->model('admin/database_model');
        $paramKategori['kategoriler'] = $this->database_model->getList("kategori");
        $param['urun'] = $this->database_model->get("urun", $id)[0];
        $param['resimler'] = $this->database_model->getByColumn("resim", "urun_id", $id);
        $this->load->view('normal/navbar');
         $this->load->view('normal/header');
        $this->load->view('normal/leftbar', $paramKategori);
        $this->load->view('normal/urun', $param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
