<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class RekomendasiModel extends Model{
    protected $primaryKey = 'id_rekomendasi';
    protected $table = 'rekomendasi';
    protected $allowedFields = ['id_produk,status'];

    public function getProduk()
    {
         return $this->db->table('rekomendasi')
         ->join('produk','rekomendasi.id_produk=produk.id_produk')
         ->get()->getResultArray();  
    }
}