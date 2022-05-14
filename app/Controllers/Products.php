<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product;

class Products extends Controller{
    public function index()
    {
        return view('DashboardSCM');
    }

    public function insert()
    {
        return view('NuevoProducto');
    }
}