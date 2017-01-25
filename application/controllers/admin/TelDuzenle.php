<?php



class TelDuzenle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['tel'] = $this->database_model->getByColumn("ayarlar", "isim", "tel")[0];
        $param['tel']->icerik = htmlentities($param['tel']->icerik);//tagları temizler
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/tel_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function kaydet() {
        $this->load->model('admin/database_model');
        $data = array('id' => $this->input->post('telId'), 'icerik' => $this->input->post('telIcerik'));
        $this->database_model->update('ayarlar', $data);
        $this->session->set_flashdata("sonuc", " Telefon numarası başarıyla güncellendi.");
        redirect(base_url() . "admin/TelDuzenle");
    }

}