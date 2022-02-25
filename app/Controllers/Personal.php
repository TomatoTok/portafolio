<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_personal;

class Personal extends BaseController
{
    public function index()
    {
        $bd = new Model_personal($db);
        $data = ['datos' => $bd->findAll(),'variable'=>'funciona'];
        return view('partials/header').view('personal/hola_mundo',$data);
    }
    public function quienSoy()
    {
        return view('partials/header').view('personal/quien_soy').view('partials/footer');
    }
    public function juegos()
    {
        return view('partials/header').view('personal/juegos').view('partials/footer');
    }
    public function addGames()
    {
        return view('partials/header').view('personal/hidden/add_games').view('partials/footer');
        
    }
}