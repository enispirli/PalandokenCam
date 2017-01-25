<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UrunEkle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['kategoriler'] = $this->database_model->getList("kategori");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/urun_ekle', $param);
        $this->load->view('admin/footer');
    }

    public function ekle() {

        $this->load->model('admin/database_model');
        $data = array(
            'ismi' => $this->input->post('urunAdi'),
            'aciklama' => $this->input->post('urunAciklama'),
            'kategori_id' => $this->input->post('urunKategori')
        );
        $this->database_model->insert_data('urun', $data);
        $dataUrun = $this->database_model->getByColumn('urun', 'ismi', $data['ismi'])[0];
        //resmin config ayarları yapılıyor.
        $config['upload_path'] = './uploads/'; // resmin nere yükleneceği
        $config['allowed_types'] = 'jpg|png|jpeg'; // hangi dosya uzantıları kabul edilecek
        $config['max_size'] = '400';

        //initialize upload class
        $this->load->library('upload', $config);


        for ($i = 0; $i < count($_FILES['usr_files']['name']); $i++) {
            $_FILES['userfile']['name'] = $dataUrun->id . "_" . $_FILES['usr_files']['name'][$i];
            $_FILES['userfile']['type'] = $_FILES['usr_files']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['usr_files']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $_FILES['usr_files']['error'][$i];
            $_FILES['userfile']['size'] = $_FILES['usr_files']['size'][$i];

            $isUploaded = $this->upload->do_upload();
            
            if ($isUploaded) {
                //eğer resim upload klasörüne yüklenmisse resim tablosuna kayıt at
                $dataResim = array(
                    'yol' => $_FILES['userfile']['name'],
                    'urun_id' => $dataUrun->id);
                $this->database_model->insert_data('resim', $dataResim);
            } else {
                // hata aldı
                $this->session->set_flashdata("sonuc", $this->upload->display_errors());
                redirect(base_url() . "admin/UrunEkle");
                return;
            }
        }


        $this->session->set_flashdata("sonuc", "Ürün ekleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/UrunEkle");
    }

}
