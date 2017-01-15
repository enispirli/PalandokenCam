<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SirketEkle
 *
 * @author elifnur
 */
class SirketEkle extends CI_Controller{

    
    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() { 
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sirket_ekle');
        $this->load->view('admin/footer');
    }
    
    public function ekle() {
        $this->load->model('admin/database_model');
        $data = array(
            'ismi' => $this->input->post('sirketAdi')
        );
        $this->database_model->insert_data('sirket', $data);
        $this->session->set_flashdata("sonuc", "Şirket ekleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/SirketEkle");
    }
}
