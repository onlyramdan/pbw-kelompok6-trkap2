<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table      = 'event';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul','gambar','deskripsi','kategori', 'linkpendaftaran','slug'];
    public function getEvent($slug = false)
    {
        //jika tidak ada slug maka tampilkan semua
        if ($slug == false) {
            return $this->findAll();
        }
        //jika ada slug maka tampilkan data pertama
        return $this->where(['slug' => $slug])->first();
    }
}