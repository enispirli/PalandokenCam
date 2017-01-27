<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UrunListele extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['urunler'] = $this->Database_Model->getList("urun");
        $kategoriler = $this->Database_Model->getList("kategori");
        $kategoriArray = [];
        foreach ($kategoriler as $kategori) {
            $kategoriArray[$kategori->id] = $kategori->isim;
        }
        $param['kategoriler'] = $kategoriArray;
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/urun_listele', $param);
        $this->load->view('admin/footer');
    }

    public function sil($id) {
        $this->load->model('admin/Database_Model');
        $this->Database_Model->delete("urun", $id);
        $this->session->set_flashdata("sonuc", "Ürün silme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/UrunListele");
    }

    public function duzenle($id) {
        $this->load->model('admin/Database_Model');
        $param['urun'] = $this->Database_Model->get("urun", $id)[0];
        $param['kategoriler'] = $this->Database_Model->getList("kategori");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/urun_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'id' => $this->input->post('urunId'),
            'ismi' => $this->input->post('urunAdi'),
            'aciklama' => $this->input->post('urunAciklama'),
            'kategori_id' => $this->input->post('urunKategori')
        );
        $this->Database_Model->update("urun", $data);
        $this->session->set_flashdata("sonuc", "Ürün güncelleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/UrunListele");
    }

}
