<?php

namespace App\Controllers;

use App\Models\EventModel;


class Artikel extends BaseController

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
}
