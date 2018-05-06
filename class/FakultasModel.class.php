<?php

class FakultasModel {

    public function random() {
    	$nomor = rand(1,15);
    	return $this->fakultas($nomor);
    }

    public function fakultas($no) {
    	$list = array("","Hukum","Ekonomi dan Bisnis","Pertanian","Kedokteran Hewan", "Teknik","Kedokteran","Perikanan dan Ilmu Kelautan","Matematika dan Ilmu Pengetahuan Alam","Teknologi Pertanian","Ilmu Sosial dan Ilmu Politik","Ilmu Budaya","Peternakan","Ilmu Komputer","Kedokteran Gigi","Vokasi","Ilmu Administrasi");
    	return $list[$no];    	
    }
}
