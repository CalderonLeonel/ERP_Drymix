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
            'idProductType' => $this->request->getVar('productNameType'),
            'idLine'  => $this->request->getVar('idLine'),
            'idFormat' => $this->request->getVar('idFormat')
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