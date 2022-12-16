<?php

namespace App\Controllers;

use App\Models\EventModel;


class Event extends BaseController

{
    protected $eventModels;
    public function __construct()
    {
        $this->eventModel = new EventModel();
    }
    public function index()
    {
        $event= $this->eventModel->findAll();
        $data = [
            'title' => 'Daftar Pelatihan & Event',
            'event' => $event
        ];

        return view('event/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Form Event dan Pelatihan',
        ];

        return view('admin/create', $data);
    }
    public function delete($id) {
        // Cari gambar berdasarkan id
        $fileGambar = $this->eventModel->find($id);
        // hapus gambar
        unlink('img/'.$fileGambar['gambar']);

        $this->eventModel->delete($id);
        session()->setFlashdata('pesan','Data berhasil dihapus.');
        return redirect()->to('admin/index');
	}
    public function save()
    {

        // ambil gambar
        $fileGambar = $this->request->getFile('gambar'); 
        // pindahkan gambar folder img
         $fileGambar->move('img');
        //  ambil nama gambar
        $namaGambar = $fileGambar->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->eventModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'linkpendaftaran' => $this->request->getVar('linkpendaftaran'),
            'kategori' => $this->request->getVar('kategori'),
        ]);
        session()->setFlashdata('pesan','Data berhasil ditambahkan.');
        return redirect()->to('/admin/index');
    }
    public function edit($id) {
        $data = [
            'title' => 'Edit Pelatihan & Event',
            'row' => $this->eventModel->where(['id'=> $id])->first()
        ];
		echo view('/admin/edit', $data);
	}

    public function update($id)
    {
        $fileGambar = $this->request->getFile('gambar');
        // pindahkan gambar folder img
        $fileGambar->move('img');
        //  ambil nama gambar
        $namaGambar = $fileGambar->getName(); 
        //hapus gambar lama 
        
        unlink('img/'.$this->request->getVar('gambarlama'));
        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->eventModel->save([ 
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'linkpendaftaran' => $this->request->getVar('linkpendaftaran'),
            'kategori' => $this->request->getVar('kategori'),
        ]);
        session()->setFlashdata('pesan','Data berhasil diubah.');
        return redirect()->to('/admin/index');
    }
 

}
  
