<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriListele extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['kategoriler'] = $this->Database_Model->getList("kategori");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/kategori_listele', $param);
        $this->load->view('admin/footer');
    }
    //$id silinen kategorinin idsi
    public function sil($id) {
        $this->load->model('admin/Database_Model');
        $urunList = $this->Database_Model->getByColumn("urun", "kategori_id", $id);
        if (count($urunList) > 0) {
            $this->session->set_flashdata("sonuc", "Bu kategoriye ait ürün olduğundan dolayı silinemedi");
            $this->session->set_flashdata("error", true);
            redirect(base_url() . "admin/KategoriListele");
        } else {
            $this->Database_Model->delete("kategori", $id);
            $this->session->set_flashdata("sonuc", "Kategori silme işlemi başarıyla tamamlandı");
            $this->session->set_flashdata("error", false);
            redirect(base_url() . "admin/KategoriListele");
        }
    }

    public function duzenle($id) {
        $this->load->model('admin/Database_Model');
        $param['kategori'] = $this->Database_Model->get("kategori", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/kategori_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'id' => $this->input->post('kategoriId'),
            'isim' => $this->input->post('kategoriAdi')
        );
        $this->Database_Model->update("kategori", $data);
        $this->session->set_flashdata("sonuc", "Kategori düzenleme işlemi başarıyla tamamlandı");
        $this->session->set_flashdata("error", false);
        redirect(base_url() . "admin/KategoriListele");
    }

}
