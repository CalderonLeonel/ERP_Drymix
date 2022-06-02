<?php 
namespace App\Controllers;
use App\Models\ProviderModel;

class ProviderController extends BaseController{
    public function index()
    {
        echo view('import/Header');
        $providerModel = new ProviderModel();
        $data['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderDashboard',$data);
        echo view('import/Footer');
    }
    public function create()
    {
        echo view('import/Header');
        return view('Acquisition/Provider/CreateProvider');
        echo view('import/Footer');
    }
    public function edit()
    {
        echo view('import/Header');
        $providerModel = new ProviderModel();
        $id = [
            'idProvider' => $this->request->getVar('idProvider')
        ];
        $data['table'] = $providerModel->readProvider($id);
        return view('Acquisition/Provider/EditProvider',$data);
        echo view('import/Footer');
    }
    public function list()
    {
        echo view('import/Header');
        $providerModel = new ProviderModel();
        $data['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList',$data);
        echo view('import/Footer');
    }
    public function InsertProvider()
    {
        echo view('import/Header');
        $providerModel = new ProviderModel();

        $data = [
            'providerName' => $this->request->getVar('providerName'),
            'contact' => $this->request->getVar('contactNumber')
        ];
        $providerModel->createProvider($data);
        $table['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList',$table);
        echo view('import/Footer');
    }

    public function UpdateProvider()
    {
        echo view('import/Header');
        $providerModel = new ProviderModel();
        $id = ['idProvider' => $this->request->getVar('idProvider')];
        $data = [   
            'providerName' => $this->request->getVar('providerName'),
            'contact' => $this->request->getVar('contact')
        ];
        $providerModel->updateProvider($id ,$data);
        $table['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList',$table);
        echo view('import/Footer');
    }

    public function DeleteProvider()
    {
        echo view('import/Header');
        $providerModel = new ProviderModel();

        $id = [
            'idProvider' => $this->request->getVar('idProvider')
        ];
        $data = [   
            'state' => 0
        ];
        $providerModel->deleteProvider($id,$data);
        $table['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList',$table);
        echo view('import/Footer');
    }

    public function readProvider()
    {
        echo view('import/Header');
        $providerModel = new ProviderModel();
        $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList');
        echo view('import/Footer');
    }
}