<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\LineModel;
use App\Models\FormatModel;

class Products extends BaseController{

    public function index()
    {
        
        return view('SCM/DashboardSCM');
    }

    public function create()
    {
<<<<<<< HEAD:app/Controllers/Products.php
        $model = new LineModel();
        $model2 = new FormatModel();

        $data['lines'] = $model->orderBy('idLine')->findAll();
        $data['format'] = $model2->orderBy('idFormat')->findAll();
        //$formatModel = new FormatModel();
        //$lineModel = new LineModel();
        //$idLine = $_POST['idLine'];
        //$lineList = $this->LineModel->ListLines();
        //$idFormat = $_POST['idFormat'];
        //$formatList = $this->FormatModel->ListFormats();
        //$dataLines ['Lines'] = $lineList;
        //$dataFormat ['Format'] = $formatList;
        
        return view('SCM/NewProduct'/*, [$dataLines, $dataFormat] */ ,  $data);
=======
        return view('SCM/AddProducto');
>>>>>>> 82784e3cb500478bda335d4ba85a14485498e8a6:app/Controllers/SCM/Products.php
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
            'productName' => $this->request->getVar('productName'),
            'IdLine'  => $this->request->getVar('idLine'),
            'IdFormat' => $this->request->getVar('idFormat')
        ];
        $productModel->insert($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
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
        return view('SCM/DashboardSCM');
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
        return view('SCM/DashboardSCM');
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