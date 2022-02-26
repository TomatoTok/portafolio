<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_personal;

class Hidden extends BaseController
{
    public function index()
    {
        $bd = new Model_personal($db);
        $data = ['datos' => $bd->findAll(),'variable'=>'funciona'];
        return view('partials/header').view('personal/addGames',$data);
    }
    public function addGames()
    {
        return view('partials/header').view('personal/hidden/add_games').view('partials/footer');
        
    }
}