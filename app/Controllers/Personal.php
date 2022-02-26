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
        $model = model('Model_games');
        $data['games'] = $model->findAll();
        return view('partials/header').view('personal/juegos',$data).view('partials/footer');
    }

}