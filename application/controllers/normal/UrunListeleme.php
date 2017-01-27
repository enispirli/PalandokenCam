<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UrunListeleme extends BaseController {

	 function _construct()
	{
        parent::_construct();

        $this->load->helper('url');

    }


	public function index()
	{       
                $this->load->model('admin/Database_Model');
                $paramKategori['kategoriler'] = $this->Database_Model->getList("kategori");
                $param['urunler'] = $this->Database_Model->db->query("select u.id, u.ismi, r.yol from urun u, resim r where r.urun_id=u.id GROUP BY u.id")->result();
		 $param['baslik'] ="Tüm Ürünler";
                $this->load->view('normal/navbar');
		$this->load->view('normal/header',$this->headerParam);
                $this->load->view('normal/leftbar',$paramKategori);
		$this->load->view('normal/listeleme',$param);
		$this->load->view('normal/footer');
		$this->load->view('normal/fix');

	
	}
        
        
        public function kategori($kid)
	{       
                $this->load->model('admin/Database_Model');
                $paramKategori['kategoriler'] = $this->Database_Model->getList("kategori");
                $param['urunler'] = $this->Database_Model->db->query("select u.id, u.ismi, r.yol from urun u, resim r where r.urun_id=u.id && u.kategori_id=? GROUP BY u.id", $kid)->result();
		 $param['baslik'] =$this->Database_Model->get("kategori", $kid)[0]->isim. " Ürünleri";
                $this->load->view('normal/navbar');
		$this->load->view('normal/header',$this->headerParam);
                $this->load->view('normal/leftbar',$paramKategori);
		$this->load->view('normal/listeleme',$param);
		$this->load->view('normal/footer');
		$this->load->view('normal/fix');

	
	}
}
