<?php

namespace App\Controllers;
use App\Models\AcquisitionModel;
use App\Models\ProviderModel;

class AcquisitionController extends BaseController
{
    public function index()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();
        $providerModel = new ProviderModel();
        $table['provider'] = $providerModel->readProviders();
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionMain',$table);
        echo view('import/Footer');
    }
    public function create()
    { 
        echo view('import/Header');
        $provider = new ProviderModel;
        $data['list'] = $provider->readProviders();
        return view('Acquisition/AcquisitionCreate',$data);
        echo view('import/Footer');
       
    }
    public function edit()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();
        $provider = new ProviderModel;
        $id = [
            'idAdquisitionQuote' => $this->request->getVar('idAdquisitionQuote')
        ];
        $data['table'] = $acquisitionModel->readAcquisition($id);
        $data['list'] = $provider->readProviders();
        return view('Acquisition/AcquisitionEdit',$data);
        echo view('import/Footer');
       
    }
    public function list()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();
        $providerModel = new ProviderModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        $table['provider'] = $providerModel->readProviders();
        return view('Acquisition/AcquisitionList',$table);
        echo view('import/Footer');
      
    }
    public function InsertAcquisition()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'idUser' => 1,
            'IdProvider' => $this->request->getVar('providerSelect')
        ];
        $acquisitionModel->createAcquisition($data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
        echo view('import/Footer');
       
    }

    public function UpdateAcquisition()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();
        $id = ['idAdquisitionQuote' => $this->request->getVar('idAdquisitionQuote')];
        $data = [   
            'name' => $this->request->getVar('name'),
            'idUser' => 1,
            'IdProvider' => $this->request->getVar('providerSelect')
            
        ];
        $acquisitionModel->updateAcquisition($id ,$data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
        echo view('import/Footer');
      
    }

    public function UpdateState()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();
        $id = ['idAdquisitionQuote' => $this->request->getVar('idAdquisitionQuote')];
        $data = [   
            'quoteState' => $this->request->getVar('stateSelect')  
        ];
        $acquisitionModel->updateAcquisition($id ,$data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
        echo view('import/Footer');
      
    }

    public function DeleteAcquisition()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();

        $id = [
            'idAdquisitionQuote' => $this->request->getVar('idAdquisitionQuote')
        ];
        $data = [   
            'quoteState' => 0
        ];
        $acquisitionModel->deleteAcquisition($id,$data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
        echo view('import/Footer');
       
    }

    public function readAcquisition()
    {
        echo view('import/Header');
        $acquisitionModel = new AcquisitionModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
        echo view('import/Footer');
       
    }
}
