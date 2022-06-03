<?php

namespace App\Controllers;
use App\Models\AcquisitionModel;
use App\Models\ProviderModel;

class AcquisitionController extends BaseController
{
    public function index()
    {
        $acquisitionModel = new AcquisitionModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
    }
    public function createAcquisition()
    { 
        $provider = new ProviderModel;
        $data['list'] = $provider->readProviders();
        return view('Acquisition/AcquisitionCreate',$data);
    }
    public function editAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();
        $provider = new ProviderModel;
        $id = [
            'idAdquisitionQuote' => $this->request->getVar('idAdquisitionQuote')
        ];
        $data['table'] = $acquisitionModel->readAcquisition($id);
        $data['list'] = $provider->readProviders();
        return view('Acquisition/AcquisitionEdit',$data);
    }
    public function acquisitionList()
    {
        $acquisitionModel = new AcquisitionModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
    }
    public function InsertAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'idUser' => 1,
            'IdProvider' => $this->request->getVar('providerSelect')
        ];
        $acquisitionModel->createAcquisition($data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
    }

    public function UpdateAcquisition()
    {
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
    }

    public function DeleteAcquisition()
    {
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
    }

    public function readAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
    }
}
