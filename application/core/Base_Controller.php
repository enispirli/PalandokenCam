<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseNormalController
 *
 * @author gurha
 */
class Base_Controller  extends CI_Controller {

    protected $headerParam = [];

    public function __construct() {
        parent::__construct();
        $this->getKategoriUrunleri();
        $this->getReferanslar();
    }

    public function getKategoriUrunleri() {
        $this->load->model("admin/Database_Model");
        $kategoriler = $this->Database_Model->getList('kategori');
        $kategoriUrunleri = array();
        foreach ($kategoriler as $kategori) {
           $kategoriUrunleri[$kategori->isim] = $this->Database_Model->getByColumn('urun', 'kategori_id', $kategori->id);
        }
        $this->headerParam['kategoriUrunleri'] = $kategoriUrunleri;
    }
    public function getReferanslar(){
         $this->load->model("admin/Database_Model");
          $referanslar = $this->Database_Model->getList('referanslar');
         $this->headerParam['referanslar'] = $referanslar;
        
    }

}
