<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siparis extends Base_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('normal/navbar');
        $this->load->view('normal/header', $this->headerParam);
        $this->load->view('normal/siparis');
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    public function kaydet() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'ad' => $this->input->post('ad'),
            'soyad' => $this->input->post('soyad'),
            'email' => $this->input->post('email'),
            'sirket' => $this->input->post('sirket'),
            'siparis_icerik' => $this->input->post('siparis_icerik'),
        );
        $email = $this->input->post('email');
        
        if (empty($email)) {
            $this->session->set_flashdata("sonuc", "Email Bos Bırakılamaz");
            redirect(base_url() . "normal/Siparis");
            return;
        }
        
       

        $this->Database_Model->insert_data('siparis', $data);

        $datasiparis = $this->Database_Model->getByColumn('siparis', 'email', $data['email'])[0];

        //resmin config ayarları yapılıyor.
        $config['upload_path'] = './uploads/'; // resmin nere yükleneceği
        $config['allowed_types'] = 'jpg|png|jpeg'; // hangi dosya uzantıları kabul edilecek
        $config['max_size'] = '400';

        //initialize upload class
        $this->load->library('upload', $config);


        for ($i = 0; $i < count($_FILES['usr_files']['name']); $i++) {
            $_FILES['userfile']['name'] = $datasiparis->id . "_" . $_FILES['usr_files']['name'][$i];
            $_FILES['userfile']['type'] = $_FILES['usr_files']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['usr_files']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $_FILES['usr_files']['error'][$i];
            $_FILES['userfile']['size'] = $_FILES['usr_files']['size'][$i];

            $isUploaded = $this->upload->do_upload();

            if ($isUploaded) {
                //eğer resim upload klasörüne yüklenmisse resim tablosuna kayıt at
                $dataResim = array(
                    'yol' => $_FILES['userfile']['name'],
                    'siparis_id' => $datasiparis->id);
                $this->Database_Model->insert_data('siparisresim', $dataResim);

                $this->load->library('email');
                $this->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik

                $isim = ($this->input->post('ad') . $this->input->post('soyad'));
                $this->email->from("grhn25@gmail.com", "dasd"); //mail gönderen bilgileri
                $this->email->to("en.ispirli@gmail.com"); //formdan gelen mail alıcı bilgileri
                $this->email->subject("sda"); //Formdan gelen mail konusu
                $this->email->message("sadsa"); //Formdan gelen mail içeriği
                $send = $this->email->send();
                if ($send) {
                    $this->session->set_flashdata("sonuc", "Siparişiniz başarıyla alınmıştır. En kısa zamanda dönüş yapılacaktır.");
                    redirect(base_url() . "normal/Siparis");
                    return;
                }
                
                $this->session->set_flashdata("sonuc", $this->email->print_debugger());
                redirect(base_url() . "normal/Siparis");
            } else {
                // hata aldı
                $this->session->set_flashdata("sonuc", $this->upload->display_errors());
                redirect(base_url() . "normal/Siparis");
                return;
            }
        }
    }

}
