<?php

namespace App\Controllers;
use Illuminate\Http\Request;
use App\Models\ProdukModel;

class Produk extends BaseController
{
  protected $produk;

	function __construct()
	{
		$this->produk = new ProdukModel();
	}

    public function index()
    {
      // $data['produks'] = $this->produk->findAll();
      $data = [
        'title_meta' => view('partials/title-meta', ['title' => 'Produk']),
        'page_title' => view('partials/page-title', ['title' => 'Produk', 'li_1' => 'Produk', 'li_2' => 'Tabel Produk']),
        'produks'     => $this->produk->orderBy('created_at', 'desc')->findAll()
      ];
		  return view('apps/produk', $data);
    }

    public function create()
	  {
      
      // $this->contact->insert([
          //     'name' => $this->request->getPost('name'),
          //     'email' => $this->request->getPost('email'),
          //     'phone' => $this->request->getPost('phone'),
          //     'address' => $this->request->getPost('address'),
          // ]);
          $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Bootstrap_Basic']),
            'page_title' => view('partials/page-title', ['title' => 'Bootstrap_Basic', 'li_1' => 'Tables', 'li_2' => 'Bootstrap Basic'])
          ];

      return view('apps/tambah-produk', $data);
	  }

    public function save()
    {
        $dataBerkas = $this->request->getFile('file');
        $fileName = $dataBerkas->getRandomName();
        

        $this->produk->insert([
          'nama_produk' => $this->request->getPost('namaproduk'),
          'ukuran' => $this->request->getPost('ukuran'),
          'deskripsi' => $this->request->getPost('deskripsi'),
          'harga' => $this->request->getPost('harga'),
          'status' => $this->request->getPost('status'),
          'keterangan'=> $this->request->getPost('keterangan'),
          'gambar' => $fileName
        ]);

        $dataBerkas->move('assets/dashboard/images/', $fileName);
        return redirect()->to(base_url('produk'));
          // echo $dataBerkas;
    }

    public function edit()
    {
      $data = [
        'title_meta' => view('partials/title-meta', ['title' => 'Bootstrap_Basic']),
        'page_title' => view('partials/page-title', ['title' => 'Bootstrap_Basic', 'li_1' => 'Tables', 'li_2' => 'Bootstrap Basic'])
      ];

      return view('apps/edit-produk', $data);
    }

    public function delete($id_produk)
    {
    
        $this->produk->delete($id_produk);
        return redirect()->to(base_url('produk'));
      
    }
}
