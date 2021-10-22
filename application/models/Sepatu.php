<?php
class Sepatu extends CI_Model{
    public function getAllSepatu(){
        return [
			[
				'merk' => 'Nike',
				'harga' => 375000,
			],
			[
				'merk' => 'Adidas',
				'harga' => 300000,
			],
			[
				'merk' => 'Kickers',
				'harga' => 250000,
			],
			[
				'merk' => 'Eiger',
				'harga' => 275000,
			],
			[
				'merk' => 'Bucherri',
				'harga' => 400000,
			],
		];
    }
    public function sepatuRule(){
        $config = array(
			array(
					'field' => 'nama',
					'label' => 'Nama',
					'rules' => 'required|alpha'
			),
			array(
					'field' => 'nomor_hp',
					'label' => 'Nomor Hp',
					'rules' => 'required|integer',
					
			),
			array(
					'field' => 'sepatu',
					'label' => 'Sepatu Yang Dipesan',
					'rules' => 'required'
			),
			
	);
    return $config;
    }
}