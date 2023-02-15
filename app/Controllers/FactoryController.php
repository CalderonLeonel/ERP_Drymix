<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FactoryModel;

class FactoryController extends BaseController{

    public function index()
    {
        echo view('Import/header');
        echo view('Product/DashboardSCM');
        echo view('Import/footer');
    }

    public function RegisterFactory(){

        echo view('Import/header');
        echo view('Factory/NewFactory');
        echo view('Import/footer');
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
        echo view('Import/header');
        echo view('Factory/ListFactories',$table);  
        echo view('Import/footer');  
    }

    public function InfoFactory($idFactory){
        
    }
}