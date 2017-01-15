<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriListele extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['kategoriler'] = $this->database_model->getList("kategori");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/kategori_listele', $param);
        $this->load->view('admin/footer');
    }

    public function sil($id) {
        $this->load->model('admin/database_model');
        $this->database_model->delete("kategori", $id);
        $this->session->set_flashdata("sonuc", "Kategori silme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/KategoriListele");
    }

    public function duzenle($id) {
        $this->load->model('admin/database_model');
        $param['kategori'] = $this->database_model->get("kategori", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/kategori_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/database_model');
        $data = array(
            'id' => $this->input->post('kategoriId'),
            'isim' => $this->input->post('kategoriAdi')
        );
        $this->database_model->update("kategori",$data);
        $this->session->set_flashdata("sonuc", "Kategori düzenleme işlemi başarıyla tamamlandı");
        redirect(base_url()."admin/KategoriListele");
    }

}
