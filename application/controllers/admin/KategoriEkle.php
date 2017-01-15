<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriEkle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() { 
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/kategori_ekle');
        $this->load->view('admin/footer');
    }

    public function ekle() {
        $this->load->model('admin/database_model');
        $data = array(
            'isim' => $this->input->post('kategoriAdi')
        );
       $this->database_model->insert_data('kategori', $data);
       $this->session->set_flashdata("sonuc", "Kategori ekleme işlemi başarıyla tamamlandı");
       redirect(base_url()."admin/KategoriEkle");
    }
}
?>

