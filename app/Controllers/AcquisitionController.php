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
        //echo view('Product/DashboardSCM');
        /*echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Acquisition/AcquisitionMain');
        echo view('Import/Footer');*/
         echo view('Import/Header');
        $acquisitionModel = new AcquisitionModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        echo view('Acquisition/AcquisitionList',$table);
        echo view('Import/Footer');
    }
    public function createAcquisition()
    { 
        echo view('Import/Header');
        $provider = new ProviderModel;
        $data['list'] = $provider->readProviders();
        echo view('Acquisition/AcquisitionCreate',$data);
        echo view('Import/Footer');
    }
    public function editAcquisition()
    {
        echo view('Import/Header');
        $acquisitionModel = new AcquisitionModel();
        $id = [
            'idAcquisitionQuote' => $this->request->getVar('idAcquisitionQuote')
        ];
        $data['table'] = $acquisitionModel->readAcquisition($id);
        echo view('Acquisition/EditAcquisition',$data);
        echo view('Import/Footer');
    }
    public function acquisitionList()
    {
        echo view('Import/Header');
        $acquisitionModel = new AcquisitionModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        echo view('Acquisition/AcquisitionList',$table);
        echo view('Import/Footer');
    }
    public function InsertAcquisition()
    {
        echo view('Import/Header');
        $acquisitionModel = new AcquisitionModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'idUser' => 1,
            'IdProvider' => $this->request->getVar('providerSelect')
        ];
        $acquisitionModel->createAcquisition($data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        echo view('Acquisition/AcquisitionList',$table);
        echo view('Import/Footer');
    }

    public function UpdateAcquisition()
    {
        echo view('Import/Header');
        $acquisitionModel = new AcquisitionModel();
        $id = ['idAcquisitionQuote' => $this->request->getVar('idAcquisitionQuote')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName'),
            'idUser' => 1,
            'IdProvider' => $this->request->getVar('IdProvider')
            
        ];
        $acquisitionModel->updateAcquisition($id ,$data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        echo view('Acquisition/AcquisitionList',$table);
        echo view('Import/Footer');
      
    }

    public function DeleteAcquisition()
    {
        echo view('Import/Header');
        $acquisitionModel = new AcquisitionModel();

        $id = [
            'idAcquisitionQuote' => $this->request->getVar('idAcquisitionQuote')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
        ];
        $acquisitionModel->deleteAcquisition($id,$data);
        $table['table'] = $acquisitionModel->readAcquisitions();
        echo view('Acquisition/AcquisitionList',$table);
        echo view('Import/Footer');
    }

    public function readAcquisition()
    {
        echo view('Import/Header');
        $acquisitionModel = new AcquisitionModel();
        $table['table'] = $acquisitionModel->readAcquisitions();
        echo view('Acquisition/AcquisitionList',$table);
        echo view('Import/Footer');
    }
}
