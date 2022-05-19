<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class Products extends BaseController{
    public function index()
    {
        return view('SCM/DashboardSCM');
    }

    public function create()
    {
        return view('SCM/NewProduct');
    }

    public function update()
    {
        return view('SCM/UpdateProduct');
    }

    public function delete()
    {
        return view('SCM/DeleteProduct');
    }

    public function InsertProduct()
    {
        $productModel = new ProductModel();

        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productModel->insert($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/NuevoProducto');
    }

    public function UpdateProduct()
    {
        $productModel = new ProductModel();

        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productModel->insert($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/NuevoProducto');
    }

    public function DeleteProduct()
    {
        $productModel = new ProductModel();

        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productModel->insert($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/NuevoProducto');
    }

    public function SelectProduct()
    {
        $productModel = new ProductModel();

        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productModel->insert($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/NuevoProducto');
    }
}