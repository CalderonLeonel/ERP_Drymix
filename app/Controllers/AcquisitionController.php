<?php

namespace App\Controllers;
use App\Models\AcquisitionModel;
use App\Models\ProviderModel;

class AcquisitionController extends BaseController
{
    public function index()
    {
        //$acquisitionModel = new AcquisitionModel();
        //$table['table'] = $acquisitionModel->readAcquisitions();
        return view('DashboardSCM');
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
        $id = [
            'idAcquisitionQuote' => $this->request->getVar('idAcquisitionQuote')
        ];
        $data['table'] = $acquisitionModel->readAcquisition($id);
        return view('Acquisition/EditAcquisition',$data);
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
        $id = ['idAcquisitionQuote' => $this->request->getVar('idAcquisitionQuote')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName'),
            'idUser' => 1,
            'IdProvider' => $this->request->getVar('IdProvider')
            
        ];
        $acquisitionModel->updateAcquisition($id ,$data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList',$table);
    }

    public function DeleteAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();

        $id = [
            'idAcquisitionQuote' => $this->request->getVar('idAcquisitionQuote')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
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
