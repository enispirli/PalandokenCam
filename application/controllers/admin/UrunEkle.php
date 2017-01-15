<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UrunEkle extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['kategoriler'] = $this->database_model->getList("kategori");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/urun_ekle', $param);
        $this->load->view('admin/footer');
    }

    public function ekle() {
        $this->load->model('admin/database_model');
        $data = array(
            'ismi' => $this->input->post('urunAdi'),
            'aciklama' => $this->input->post('urunAciklama'),
            'kategori_id' => $this->input->post('urunKategori')
        );
        $this->database_model->insert_data('urun', $data);
        $this->session->set_flashdata("sonuc", "Ürün ekleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/UrunEkle");
    }

}
