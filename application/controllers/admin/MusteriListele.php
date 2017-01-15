<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MusteriListele extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['musteriler'] = $this->database_model->getList("musteri");
        $sirketler = $this->database_model->getList("sirket");
        $sirketlerArray = [];
        foreach ($sirketler as $sirket) {
            $sirketlerArray[$sirket->id] = $sirket->ismi;
        }
        $param['sirketler'] = $sirketlerArray;
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/musteri_listele',$param);
        $this->load->view('admin/footer');
    }

    public function sil($id) {
        $this->load->model('admin/database_model');
        $this->database_model->delete("musteri", $id);
        $this->session->set_flashdata("sonuc", "Müşteri silme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/MusteriListele");
    }

    public function duzenle($id) {
        $this->load->model('admin/database_model');
        $param['musteri'] = $this->database_model->get("musteri", $id)[0];
         $param['musteriler'] = $this->database_model->getList("musteri");
        $sirketler = $this->database_model->getList("sirket");
        $param['sirketler'] = $sirketler;
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/musteri_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
         if ($this->input->post('musteriSifre') == $this->input->post('musteriSifre2')) {
            $this->load->model('admin/database_model');
            $data = array(
                'id' => $this->input->post('musteriId'),
                'ad' => $this->input->post('musteriAdi'),
                'soyad' => $this->input->post('musteriSoyadi'),
                'email' => $this->input->post('musteriEmail'),
                'sifre' => $this->input->post('musteriSifre'),
                'tel' => $this->input->post('musteriTel'),
                'sirket_id' => $this->input->post('musteriSirket')
            );
            $this->database_model->update('musteri', $data);
            $this->session->set_flashdata("sonuc", "Müşteri düzenleme işlemi başarıyla tamamlandı");
            redirect(base_url() . "admin/MusteriListele");
        } else {
            $this->session->set_flashdata("error", true);
            $this->session->set_flashdata("sonuc", "Şifreler uyuşmuyor.");
            redirect(base_url() . "admin/MusteriListele");
        }
    }

}

