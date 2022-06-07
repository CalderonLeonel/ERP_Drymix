<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product;

class ProductController extends Controller{
    public function index()
    {
        return view('DashboardSCM');
    }

    public function insert()
    {
        return view('NuevoProducto');
    }
}