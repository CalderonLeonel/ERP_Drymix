<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FactoryModel;

class Factories extends BaseController{

    public function index()
    {
        echo view('Import/header');
        echo view('Product/DashboardSCM');
        echo view('Import/footer');
    }

    public function RegisterFactory(){

        echo view('Import/Header');
        echo view('Factory/NewFactory');
        echo view('Import/Footer');
    }

    public function InsertFactory(){
        
        $factoryModel = new FactoryModel();

        $data = [
            'factoryName' => $this->request->getVar('factoryName'),
            'address' => $this->request->getVar('factoryAddress')
        ];

        $factoryModel->InsertFactory($data);

        $table['table'] = $factoryModel->SelectFactories();
        echo view('Import/header');
        echo view('Factory/ListFactories',$table);
        echo view('Import/footer');
    }

    public function ListFactories(){
        $factoryModel = new FactoryModel();

        $table['table'] = $factoryModel->SelectFactories();
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Factory/ListFactories',$table);  
        echo view('Import/Footer');  
    }

    public function InfoFactory($idFactory){
        
    }
}