<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HakkimizdaDuzenle extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['hakkimizda'] = $this->Database_Model->get("ayarlar", 2)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/hakkimizda_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'id' => $this->input->post('hakkimizdaId'),
            'isim' => $this->input->post('hakkimizdaIsim'),
            'icerik' => $this->input->post('hakkimizdaIcerik'),
        );
        $this->Database_Model->update("ayarlar", $data);
        $this->session->set_flashdata("sonuc", "Hakkımızda güncelleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/HakkimizdaDuzenle");
    }

  

    

}
