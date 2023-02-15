<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('DashboardPrincipal');
        echo view('Import/Footer');
    }
}
