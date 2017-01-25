<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UrunListeleme extends CI_Controller {

	 function _construct()
	{
        parent::_construct();

        $this->load->helper('url');

    }


	public function index()
	{       
                $this->load->model('admin/database_model');
                $paramKategori['kategoriler'] = $this->database_model->getList("kategori");
                $param['urunler'] = $this->database_model->db->query("select u.id, u.ismi, r.yol from urun u, resim r where r.urun_id=u.id GROUP BY u.id")->result();
		 $param['baslik'] ="Tüm Ürünler";
                $this->load->view('normal/navbar');
		$this->load->view('normal/header');
                $this->load->view('normal/leftbar',$paramKategori);
		$this->load->view('normal/listeleme',$param);
		$this->load->view('normal/footer');
		$this->load->view('normal/fix');

	
	}
        
        
        public function kategori($kid)
	{       
                $this->load->model('admin/database_model');
                $paramKategori['kategoriler'] = $this->database_model->getList("kategori");
                $param['urunler'] = $this->database_model->db->query("select u.id, u.ismi, r.yol from urun u, resim r where r.urun_id=u.id && u.kategori_id=? GROUP BY u.id", $kid)->result();
		 $param['baslik'] =$this->database_model->get("kategori", $kid)[0]->isim. " Ürünleri";
                $this->load->view('normal/navbar');
		$this->load->view('normal/header');
                $this->load->view('normal/leftbar',$paramKategori);
		$this->load->view('normal/listeleme',$param);
		$this->load->view('normal/footer');
		$this->load->view('normal/fix');

	
	}
}
