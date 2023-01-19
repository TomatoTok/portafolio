<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('/partials/header').view('/home/index').view('/partials/footer');
    }
    public function components()
    {
        return view('/home/components');
    }
}
