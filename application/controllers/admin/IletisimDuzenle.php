<?php


class IletisimDuzenle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['iletisim'] = $this->Database_Model->getByColumn("ayarlar", "isim", "iletisim_icerik")[0];
        $param['iletisim']->icerik = htmlentities($param['iletisim']->icerik);
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/iletisim_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function kaydet() {
        $this->load->model('admin/Database_Model');
        $data = array('id' => $this->input->post('id'), 'icerik' => $this->input->post('iletisim'));
        $this->Database_Model->update('ayarlar', $data);
        $this->session->set_flashdata("sonuc", "İletişim içeriği başarıyla güncellendi.");
        redirect(base_url() . "admin/IletisimDuzenle");
    }

}
