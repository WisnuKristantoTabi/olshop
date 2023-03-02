<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Beli extends Controller
{
    public function proses()
	{   
        $barang = $this->request->getPost('namabarang');
        $ukuran = $this->request->getPost('ukuran');
        $jumlah = $this->request->getPost('jumlah');
        return redirect()->to(
            "https://api.whatsapp.com/send?phone=6282347502225&text="."Hi%20Admin%20Pesan%20".$barang."%20Dengan%20Ukuran%20".$ukuran."%20Dan%20Jumlah%20".$jumlah
        );
    }
}