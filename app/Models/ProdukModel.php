<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProdukModel extends Model{
    protected $DBGroup = 'default';
    protected $returnType = 'object';
    protected $primaryKey = 'id_produk';
    protected $table = 'produk';
    protected $allowedFields = ['nama_produk','ukuran','deskripsi','harga','gambar','status','keterangan','created_at'];
}