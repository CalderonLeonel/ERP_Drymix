<?php 
namespace App\Controllers;
use App\Models\ProviderModel;

class ProviderController extends BaseController{
    public function index()
    {
        return view('Provider/ProviderDashboard');
    }
    public function create()
    {
        return view('Provider/CreateProvider');
    }
    public function edit()
    {
        return view('Provider/EditProvider');
    }
    public function list()
    {
        return view('Provider/ProviderList');
    }
    public function InsertProvider()
    {
        $providerModel = new ProviderModel();

        $data = [
            'providerName' => $this->request->getVar('providerName'),
            'contact' => $this->request->getVar('contact')
        ];
        $providerModel->insertProvider($data);
        return view('Provider/ProviderList');
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
        return view('Provider/ProviderList');
    }

    public function DeleteProvider()
    {
        $providerModel = new ProviderModel();

        $id = [
            'idProvider' => $this->request->getVar('idProvider')
        ];
        $data = [   
            'contact' => $this->request->getVar('contact')
        ];
        $providerModel->deleteProvider($id,$data);
        return view('Provider/ProviderList');
    }

    public function readProviders()
    {
        $providerModel = new ProviderModel();
        $providerModel->readProviders();
        return view('Provider/ProviderList');
    }
}