<?php



class AdresDuzenle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['adres'] = $this->Database_Model->getByColumn("ayarlar", "isim", "adres")[0];
        $param['adres']->icerik = htmlentities($param['adres']->icerik);//tagları temizler
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/adres_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function kaydet() {
        $this->load->model('admin/Database_Model');
        $data = array('id' => $this->input->post('adresId'), 'icerik' => $this->input->post('adresIcerik'));
        $this->Database_Model->update('ayarlar', $data);
        $this->session->set_flashdata("sonuc", "Adres içeriği başarıyla güncellendi.");
        redirect(base_url() . "admin/AdresDuzenle");
    }

}

