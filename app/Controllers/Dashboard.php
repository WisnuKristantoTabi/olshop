<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;
use App\Models\RekomendasiModel;

class Dashboard extends Controller
{
	protected $produk;

	function __construct()
	{
		$this->produk = new ProdukModel();
		$this->rekomendasi = new RekomendasiModel();

	}
    public function index()
	{
		
		$data['produks'] = $this->produk
		->orderBy('created_at', 'desc')
		->findAll(3);
		$data['rekomendasi'] = $this->rekomendasi->getProduk();

		return view('home/index', $data);
	}

	public function shop()
	{
		
		$data['produks'] = $this->produk
		->orderBy('created_at', 'desc')
		->paginate(3,'produk');
		$data['pager'] = $this->produk->pager;
		return view('home/shop', $data);
	}

	public function shopdetail($id=1)
	{
		
		$data['produks'] = $this->produk
		->where('id_produk',$id)
		->first();
		// print_r($data);

		return view('home/shop-detail', $data);
	}

}