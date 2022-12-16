<?php

namespace App\Controllers;
use App\Models\EventModel;

class Admin extends BaseController
{
    protected $eventModels;
    public function __construct()
    {
        $db = db_connect();
        $this->eventModel = new EventModel();
    }
    public function index()
    {
        $event= $this->eventModel->findAll();
        $data = [
            'title' => 'Daftar Pelatihan & Event',
            'event' => $event
        ];
        return view('admin/index', $data);
    }
    public function create() {
        $data = [
            'title' => 'Daftar Pelatihan & Event'
        ];
		echo view('/admin/create', $data);
	}
    // public function save()
    // {
    //     $slug = url_title($this->request->getVar('judul','-',true));
    //     $this->eventModel->save([
    //         'judul' => $this->request->getVar('judul'),
    //         'slug' => $slug,
    //         'gambar' => $this->request->getPost('gambar'),
    //         'deskripsi' => $this->request->getVar('deskripsi'),
    //         'kategori' => $this->request->getVar('kategori')
    //     ]);
    //     return redirect()->to('/event');
        
        // // dd($this->request->getPost());
        // $this->eventModels->add([
        //     'judul' => $this->request->getPost('judul'),
        //     'gambar' => $this->request->getPost('gambar'),
        //     'deskripsi' => $this->request->getPost('deskripsi'),
        //     'kategori'=>  $this->request->getPost('kategori')
        // // $judul	= $this->request->getPost('judul');
		// // $gambar	= $this->request->getPost('gambar');
		// // $deskripsi	= $this->request->getPost('deskripsi');
		// // $kategori = $this->request->getPost('kategori');
        // ]);
        // // $data = [
        // //     'judul'=> $judul,
        // //     'gambar'=> $gambar,
        // //     'deskripsi'=> $deskripsi,
        // //     'kategori'=> $kategori,
        // // ];
       
    // }
}
