<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LineModel;
class LinesController extends BaseController{


    //Controladores para la tabla Product
    public function createProduct()
    {
        $lineModel = new LineModel();

        $data['lines'] = $lineModel->orderBy('idLine')->findAll();
        //$formatModel = new FormatModel();
        //$lineModel = new LineModel();
        //$idLine = $_POST['idLine'];
        //$lineList = $this->LineModel->ListLines();
        //$idFormat = $_POST['idFormat'];
        //$formatList = $this->FormatModel->ListFormats();
        //$dataLines ['Lines'] = $lineList;
        //$dataFormat ['Format'] = $formatList;
        
        return view('SCM/NewLine' ,  $data);
    }

    public function updateProducts()
    {
        $lineModel = new LineModel();
        $id = [
            'idLine' => $this->request->getVar('idLine')
        ];


        //$data['list'] = $productTypeModel->readProductsTypes();
        $data['table'] =$lineModel ->readItem($id);
        return view('SCM/UpdateProduct', $data);
    }

    public function deleteProducts()
    {
        $lineModel = new LineModel();

        $id = [
            'idModel' => $this->request->getVar('idModel')
        ];
        $data = [   
            'state' => 0
        ];
        $lineModel->deleteProduct($id,$data);
        $lineModel->readProducts();
        $data['table'] = $lineModel->readProducts();
        return view('SCM/DeleteProduct');
    }

    public function InsertProduct()
    {
        $lineModel = new LineModel();

        $data = [
            'productName' => $this->request->getVar('productName'),
            'idLine'  => $this->request->getVar('idLine'),
            'idFormat' => $this->request->getVar('idFormat')
        ];
        $lineModel->InsertLine($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function UpdateProduct()
    {
        $lineModel = new LineModel();
        $id = ['idProduct' => $this->request->getVar('idProduct')];
        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $lineModel->updateProduct($data, $id);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function DeleteProduct()
    {
        $lineModel = new LineModel();
        $id = ['idProduct' => $this->request->getVar('idProduct')];
        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $lineModel->deleteProduct($data , $id);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function ReadProduct()
    {
        $lineModel = new LineModel();

        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $lineModel->readProducts($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }
}