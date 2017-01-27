<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SirketListele extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['sirketler'] = $this->Database_Model->getList("sirket");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sirket_listele', $param);
        $this->load->view('admin/footer');
    }

    public function sil($id) {
        $this->load->model('admin/Database_Model');
        $musteriList = $this->Database_Model->getByColumn("musteri", "sirket_id", $id);
        if (count($musteriList) > 0) {
            $this->session->set_flashdata("error", true);
            $this->session->set_flashdata("sonuc", "Bu şirkete kayıtlı müşteri olduğundan şirket silinemedi.");
            redirect(base_url() . "admin/SirketListele");
        } else {
            $this->Database_Model->delete("sirket", $id);
            $this->session->set_flashdata("error", false);
            $this->session->set_flashdata("sonuc", "Şirket silme işlemi başarıyla tamamlandı");
            redirect(base_url() . "admin/SirketListele");
        }
    }

    public function duzenle($id) {
        $this->load->model('admin/Database_Model');
        $param['sirket'] = $this->Database_Model->get("sirket", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sirket_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'id' => $this->input->post('sirketId'),
            'ismi' => $this->input->post('sirketAdi')
        );
        $this->Database_Model->update("sirket", $data);
        $this->session->set_flashdata("error", false);
        $this->session->set_flashdata("sonuc", "Şirket düzenleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/SirketListele");
    }

}
