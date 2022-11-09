<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductTypeModel;
use App\Controllers\BaseController;


class ProductTypeController extends BaseController{

     public function index()
    {
        echo view('Import/header');
        echo view('Product/DashboardSCM');
        echo view('Import/footer');
    }

    public function RegisterProductType(){
        //$productTypesModel = new ProductTypeModel();

        //$data['types'] = $productTypesModel->SelectProductTypes();

        echo view('Import/header');
        echo view('Product/ProductType/NewType');
        echo view('Import/footer');
    }

    public function InsertProductType(){
        
        $productTypesModel = new ProductTypeModel();

        $data = [
            //'codProduct' => $this->request->getPost('codProduct'),
            'productTypeName' => $this->request->getVar('productTypeName'),
        ];

        $productTypesModel->InsertProductType($data);

        $table['table'] = $productTypesModel->SelectProductTypes();
        echo view('Import/header');
        echo view('Product/ProductType/ListTypes',$table);
        echo view('Import/footer');
    }

    public function ListTypes(){
        $productTypesModel = new ProductTypeModel();

        $table['table'] = $productTypesModel->SelectProductTypes();

        echo view('Import/header');
        echo view('Product/ProductType/ListTypes',$table);  
        echo view('Import/header');  
    }

    public function InfoTypes($idProduct){

    }
}