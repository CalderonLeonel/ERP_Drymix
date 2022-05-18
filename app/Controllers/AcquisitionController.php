<?php

namespace App\Controllers;
use App\Models\AcquisitionModel;

class AcquisitionController extends BaseController
{
    public function index()
    {
        return view('Acquisition/AcquisitionMain');
    }
    public function createAcquisition()
    {
        return view('Acquisition/CreateAcquisition');
    }
    public function editAcquisition()
    {
        return view('Acquisition/EditAcquisition');
    }
    public function acquisitionList()
    {
        return view('Acquisition/AcquisitionList');
    }
    public function InsertAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();

        $data = [
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $acquisitionModel->insertAcquisition($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();
        $id = ['idAcquisition' => $this->request->getVar('idAcquisition')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $acquisitionModel->updateAcquisition($id ,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function DeleteAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();

        $id = [
            'idAcquisition' => $this->request->getVar('idAcquisition')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
        ];
        $acquisitionModel->deleteAcquisition($id,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function readAcquisition()
    {
        $acquisitionModel = new AcquisitionModel();
        $acquisitionModel->readAcquisitions();
        return view('Acquisition/AcquisitionList');
    }
}
