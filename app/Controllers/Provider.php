<?php 
namespace App\Controllers;
use App\Models\ProviderModel;

class ProviderController extends BaseController{
    public function index()
    {
        echo view('Import/Header');
        $providerModel = new ProviderModel();
        $data['table'] = $providerModel->readProviders();
        echo view('Acquisition/Provider/ProviderDashboard',$data);
        //echo view('Import/asideMenu');
        //echo view('Product/DashboardSCM');
        echo view('Import/Footer');
    }
    public function create()
    {
        echo view('Import/Header');
        echo view('Acquisition/Provider/CreateProvider');
        echo view('Import/Footer');
    }
    public function edit()
    {
        echo view('Import/Header');
        $providerModel = new ProviderModel();
        $id = [
            'idProvider' => $this->request->getVar('idProvider')
        ];
        $data['table'] = $providerModel->readProvider($id);
        echo view('Acquisition/Provider/EditProvider',$data);
        echo view('Import/Footer');
    }
    public function list()
    {
        echo view('Import/Header');

        $providerModel = new ProviderModel();
        $data['table'] = $providerModel->readProviders();
        echo view('Acquisition/Provider/ProviderList',$data);
        echo view('Import/Footer');
        
    }
    public function InsertProvider()
    {
        echo view('Import/Header');
        $providerModel = new ProviderModel();
        $data = [
            'providerName' => $this->request->getVar('providerName'),
            'contact' => $this->request->getVar('contactNumber')
        ];
        $providerModel->createProvider($data);
        $table['table'] = $providerModel->readProviders();
        echo view('Acquisition/Provider/ProviderList',$table);
        echo view('Import/Footer');
    }

    public function UpdateProvider()
    {
        echo view('Import/Header');
        $providerModel = new ProviderModel();
        $id = ['idProvider' => $this->request->getVar('idProvider')];
        $data = [   
            'providerName' => $this->request->getVar('providerName'),
            'contact' => $this->request->getVar('contact')
        ];
        $providerModel->updateProvider($id ,$data);
        $table['table'] = $providerModel->readProviders();
        echo view('Acquisition/Provider/ProviderList',$table);
        echo view('Import/Footer');
    }

    public function DeleteProvider()
    {
        echo view('Import/Header');
        $providerModel = new ProviderModel();

        $id = [
            'idProvider' => $this->request->getVar('idProvider')
        ];
        $data = [   
            'state' => 0
        ];
        $providerModel->deleteProvider($id,$data);
        $table['table'] = $providerModel->readProviders();
        echo view('Acquisition/Provider/ProviderList',$table);
        echo view('Import/Footer');
    }

    public function readProvider()
    {
        echo view('Import/Header');
        $providerModel = new ProviderModel();
        $providerModel->readProviders();
        echo view('Acquisition/Provider/ProviderList');
        echo view('Import/Footer');
    }
}