<?php 
namespace App\Controllers;
use App\Models\ProviderModel;

class ProviderController extends BaseController{
    public function index()
    {
        $providerModel = new ProviderModel();
        $data['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderDashboard',$data);
    }
    public function create()
    {
        return view('Acquisition/Provider/CreateProvider');
    }
    public function edit()
    {
        $providerModel = new ProviderModel();
        $id = [
            'idProvider' => $this->request->getVar('idProvider')
        ];
        $data['table'] = $providerModel->readProvider($id);
        return view('Acquisition/Provider/EditProvider',$data);
    }
    public function list()
    {
        $providerModel = new ProviderModel();
        $data['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList',$data);
        
    }
    public function InsertProvider()
    {
        $providerModel = new ProviderModel();

        $data = [
            'providerName' => $this->request->getVar('providerName'),
            'contact' => $this->request->getVar('contactNumber')
        ];
        $providerModel->createProvider($data);
        $table['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList',$table);
    }

    public function UpdateProvider()
    {
        $providerModel = new ProviderModel();
        $id = ['idProvider' => $this->request->getVar('idProvider')];
        $data = [   
            'providerName' => $this->request->getVar('providerName'),
            'contact' => $this->request->getVar('contact')
        ];
        $providerModel->updateProvider($id ,$data);
        $table['table'] = $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList',$table);
    }

    public function DeleteProvider()
    {
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
    }

    public function readProvider()
    {
        $providerModel = new ProviderModel();
        $providerModel->readProviders();
        return view('Acquisition/Provider/ProviderList');
    }
}