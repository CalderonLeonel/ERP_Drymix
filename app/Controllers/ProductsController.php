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
        
        return view('SCM/DashboardSCM');
    }
//Controladores para la tabla Product
    public function createProduct()
    {
        $lineModel = new LineModel();
        $formatModel = new FormatModel();

        $data['lines'] = $lineModel->orderBy('idLine')->findAll();
        $data['format'] = $formatModel->orderBy('idFormat')->findAll();
       
        
        return view('SCM/NewProduct' ,  $data);
    }

    public function updateProducts()
    {
        $lineModel = new LineModel();
        $formatModel = new FormatModel();
        $id = [
            'IdProduct' => $this->request->getVar('idItem')
        ];

        $productTypeModel = new ProductTypeModel();

        $data['list'] = $productTypeModel->readProductsTypes();
        $data['table'] =$lineModel ->readItem($id);
        return view('SCM/UpdateProduct', $data);
    }

    public function deleteProducts()
    {
        $productModel = new ProductModel();

        $id = [
            'idItem' => $this->request->getVar('idItem')
        ];
        $data = [   
            'state' => 0
        ];
        $productModel->deleteProduct($id,$data);
        $productModel->readProducts();
        $data['table'] = $productModel->readProducts();
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
        $productModel->InsertProduct($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function UpdateProduct()
    {
        $productModel = new ProductModel();
        $id = ['idProduct' => $this->request->getVar('idProduct')];
        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productModel->updateProduct($data, $id);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function DeleteProduct()
    {
        $productModel = new ProductModel();
        $id = ['idProduct' => $this->request->getVar('idProduct')];
        
        $productModel->deleteProduct($data , $id);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function ReadProduct()
    {
        $productModel = new ProductModel();

        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productModel->readProducts($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }


    //Controladores para la tabla ProductType

    public function createProductType()
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
        
        return view('SCM/NewProductType' ,  $data);
    }

    public function updateProductsType()
    {
        $lineModel = new LineModel();
        $id = [
            'IdProduct' => $this->request->getVar('idItem')
        ];

        $productTypeModel = new ProductTypeModel();

        $data['list'] = $productTypeModel->readProductsTypes();
        $data['table'] =$lineModel ->readItem($id);
        return view('SCM/UpdateProduct', $data);
    }

    public function deleteProductsType()
    {
        $productTypeModel = new ProductTypeModel();

        $id = [
            'idItem' => $this->request->getVar('idItem')
        ];
        $data = [   
            'state' => 0
        ];
        $productTypeModel->deleteProduct($id,$data);
        $productTypeModel->readProducts();
        $data['table'] = $productTypeModel->readProducts();
        return view('SCM/DeleteProduct', $data);
    }

    public function InsertProductType()
    {
        $productTypeModel = new ProductTypeModel();

        $data = [
            'productName' => $this->request->getVar('productName'),
            'IdLine'  => $this->request->getVar('idLine'),
            'IdFormat' => $this->request->getVar('idFormat')
        ];
        $productTypeModel->createProductType($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function UpdateProductType()
    {
        $productTypeModel = new ProductTypeModel();
        $id = ['idProductType' => $this->request->getVar('idProductType')];
        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productTypeModel->updateProductType($data, $id);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function DeleteProductType()
    {
        $productTypeModel = new ProductTypeModel();
        $id = ['idProductType' => $this->request->getVar('idProductType')];
        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productTypeModel->deleteProductType($data, $id);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

    public function ReadProductType()
    {
        $productTypeModel = new ProductTypeModel();

        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $productTypeModel->readProductsType($data);
        //return $this->response->redirect(site_url('/users-list'));
        return view('SCM/DashboardSCM');
    }

}