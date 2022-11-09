<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\LineModel;
use App\Models\FormatModel;
use App\Models\ProductTypeModel;

class ProductsController extends BaseController{

    public function index()
    {
        echo view('Import/header');
        echo view('Product/DashboardSCM');
        echo view('Import/footer');
    }

    public function RegisterProduct(){
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();

        $data['types'] = $productTypesModel->SelectProductTypes();
        $data['format'] = $formatModel->SelectFormat();

        echo view('Import/header');
        echo view('Product/NewProduct', $data);
        echo view('Import/footer');
    }

    public function InsertProduct(){
        
        $productModel = new ProductModel();
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();

        $data = [
            //'codProduct' => $this->request->getPost('codProduct'),
            'productName' => $this->request->getVar('productName'),
            //'lineProduct' => $this->request->getPost('idLine'),
            'idProductType' => $this->request->getVar('idTypes'),
            'idFormat' => $this->request->getVar('idFormat')
        ];

        $productModel->InsertProduct($data);
        $table['types'] = $productTypesModel->SelectProductTypes();
        $table['format'] = $formatModel->SelectFormat();

        $table['table'] = $productModel->SelectProducts();
        echo view('Import/header');
        echo view('Product/ListProducts',$table);
        echo view('Import/Footer');
    }

    public function ListProducts(){
        $productModel = new ProductModel();
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();

        $table['types'] = $productTypesModel->SelectProductTypes();
        $table['format'] = $formatModel->SelectFormat();

        $table['table'] = $productModel->SelectProducts();
        echo view('Import/header');
        echo view('Product/ListProducts',$table);  
        echo view('Import/footer');  
    }

    public function UpdateProduct(){
        $productModel = new ProductModel();
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();
        
        $idProduct = $this->request->getPost('idProduct');

        $data = [
            'productName' => $this->request->getPost('productName'),
            //'lineProduct' => $this->request->getPost('idLine'),
            'idProductType' => 3,
            'idFormat' => 1
        ];

        $productModel->UpdateProduct($data, $idProduct);

        $table['types'] = $productTypesModel->SelectProductTypes();
        $table['format'] = $formatModel->SelectFormat();

        $table['table'] = $productModel->SelectProducts();
        echo view('Import/header');
        echo view('Product/ListProducts',$table);  
        echo view('Import/footer');  
    }

    public function InfoProduct($idProduct){

    }
}