<?php



class EmailDuzenle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['mail'] = $this->Database_Model->getByColumn("ayarlar", "isim", "mail")[0];
        $param['mail']->icerik = htmlentities($param['mail']->icerik);//tagları temizler
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/email_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function kaydet() {
        $this->load->model('admin/Database_Model');
        $data = array('id' => $this->input->post('mailId'), 'icerik' => $this->input->post('mailIcerik'));
        $this->Database_Model->update('ayarlar', $data);
        $this->session->set_flashdata("sonuc", "Email içeriği başarıyla güncellendi.");
        redirect(base_url() . "admin/EmailDuzenle");
    }

}

