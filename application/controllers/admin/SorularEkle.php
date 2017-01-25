<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SorularEkle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() { 
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sorular_ekle');
        $this->load->view('admin/footer');
    }

    public function ekle() {
        $this->load->model('admin/database_model');
        $data = array(
            'soru' => $this->input->post('soru'),
            'cevap' => $this->input->post('cevap')
        );
       $this->database_model->insert_data('sorular', $data);
       $this->session->set_flashdata("sonuc", "Sık sorulan sorulara ekleme işlemi başarıyla tamamlandı");
       redirect(base_url()."admin/SorularEkle");
    }
}
?>

