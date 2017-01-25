<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['sliderlar'] = $this->database_model->getList("slider");
        $kategoriler = $this->database_model->getList('kategori');
        $kategoriUrunleri = array();
        foreach($kategoriler as $kategori){
            $kategoriUrunleri[$kategori->isim] = $this->database_model->getByColumn('urun', 'kategori_id', $kategori->id);
        }
        $headerParam ['kategoriUrunler'] = $kategoriUrunleri; 
        $this->load->view('normal/navbar');
        $this->load->view('normal/header', $headerParam);
        $this->load->view('normal/content', $param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
