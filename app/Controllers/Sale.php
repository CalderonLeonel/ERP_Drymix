<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\SaleModel;
use App\Models\ProductModel;
use App\Models\ClientModel;

class SaleController extends BaseController{

    public function index()
    {
        echo view('Import/Header');
        echo view('Product/DashboardSCM');
        echo view('Import/Footer');
    }

    public function NewSale(){
        
        echo view('Import/Header');
        return view('Sales/Newsale');
        echo view('Import/Footer');
    }

    public function InsertSale(){
        
        $saleModel = new saleModel();

        $data = [
            //'codsale' => $this->request->getPost('codsale'),
            'saleName' => $this->request->getVar('saleName'),
            //'linesale' => $this->request->getPost('idLine'),
            'idsaleType' => $this->request->getVar('idTypes'),
            'idFormat' => $this->request->getVar('idFormat')
        ];

        $saleModel->Insertsale($data);

        $table['table'] = $saleModel->Selectsales();
        echo view('Import/Header');
        echo view('Sales/Listsales',$table);
        echo view('Import/Footer');
    }

    public function ListSales(){
        $saleModel = new saleModel();



        $table['table'] = $saleModel->SelectSales();
        echo view('Import/Header');
        echo view('Sales/ListSales',$table);  
        echo view('Import/Footer');  
    }

    public function Update(){
        $saleModel = new saleModel();
        $idSale = [
            'idsale' => $this->request->getVar('idSale')
        ];
        $data['table'] = $saleModel->SelectsaleById($idSale);

        echo view ("Import/Header");
        return view('Sales/Updatesale',$data);
        echo view ("Import/Footer");
    }

    public function UpdateSale(){
        $saleModel = new saleModel();
        
        $idSale = $this->request->getPost('idSale');

        $data = [
            'saleName' => $this->request->getVar('saleName'),
            //'linesale' => $this->request->getPost('idLine'),
            'idsaleType' => $this->request->getVar('idsaleType') ,
            'idFormat' => $this->request->getVar('idFormat')
        ];

        $saleModel->Updatesale($data, $idSale);

        $table['table'] = $saleModel->Selectsales();
        echo view('Import/Header');
        echo view('Sales/Listsales',$table);  
        echo view('Import/Footer');  
    }

    public function InfoSale(){
        $saleModel = new saleModel();
        
        $idsale = $this->request->getVar('idSale');

        $table['table'] = $saleModel->SelectsaleById($idsale);
        echo view('Import/Header');
        echo view('Sales/Updatesale',$table);
        echo view('Import/Footer');

    }
}