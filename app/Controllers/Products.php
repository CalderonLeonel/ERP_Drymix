<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\LineModel;
use App\Models\FormatModel;
use App\Models\ProductTypeModel;

class Products extends BaseController{

    public function index()
    {
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Product/DashboardSCM');
        echo view('Import/Footer');
    }

    public function RegisterProduct(){
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();

        $data['types'] = $productTypesModel->SelectProductTypes();
        $data['format'] = $formatModel->SelectFormat();

        echo view('Import/Header');
        echo view('Product/NewProduct', $data);
        echo view('Import/Footer');
    }

    public function InsertProduct(){
        
        $productModel = new Product();
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
        $productModel = new Product();
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();

        $table['types'] = $productTypesModel->SelectProductTypes();
        $table['format'] = $formatModel->SelectFormat();

        $table['table'] = $productModel->SelectProducts();
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Product/ListProducts',$table);  
        echo view('Import/Footer');  
    }

    public function Update(){
        $productModel = new Product();
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();
        $idProduct = [
            'idProduct' => $this->request->getVar('idProduct')
        ];
        $data['table'] = $productModel->SelectProductById($idProduct);
        $data['types'] = $productTypesModel->SelectProductTypes();
        $data['format'] = $formatModel->SelectFormat();
        echo view ("Import/Header");
        return view('Product/UpdateProduct',$data);
        echo view ("Import/Footer");
    }

    public function UpdateProduct(){
        $productModel = new Product();
        $productTypesModel = new ProductTypeModel();
        $formatModel = new FormatModel();
        
        $idProduct = $this->request->getPost('idProduct');

        $data = [
            'productName' => $this->request->getVar('productName'),
            //'lineProduct' => $this->request->getPost('idLine'),
            'idProductType' => $this->request->getVar('idProductType') ,
            'idFormat' => $this->request->getVar('idFormat')
        ];

        $productModel->UpdateProduct($data, $idProduct);

        $table['types'] = $productTypesModel->SelectProductTypes();
        $table['format'] = $formatModel->SelectFormat();

        $table['table'] = $productModel->SelectProducts();
        echo view('Import/Header');
        echo view('Product/ListProducts',$table);  
        echo view('Import/Footer');  
    }

    public function InfoProduct(){
        $productModel = new Product();
        
        $idProduct = $this->request->getVar('idProduct');

        $table['table'] = $productModel->SelectProductById($idProduct);
        echo view('Import/Header');
        echo view('Product/UpdateProduct',$table);
        echo view('Import/Footer');

    }

    public function SearchProduct()
    {
        $productModel = new Product();
        
        $idProduct = $this->request->getPost('idProduct');
    }
}