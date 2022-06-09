<?php

namespace App\Controllers;
use App\Models\ChargeModel;
class ChargeController extends BaseController
{
    public function index()
    {
        echo view('import/Header');
        $ChargeModel = new ChargeModel();
        $data['table'] = $ChargeModel->readCharges();
        
        return view('Charge/Chargelist',$data);
        echo view('import/Footer');
      
    }
    public function createCharge()
    {
        echo view('import/Header');
        return view('Charge/CreateCharge');
        echo view('import/Footer');
    }
    public function editCharge()
    {
        echo view('import/Header');
        $ChargeModel = new ChargeModel();
        $id = [
            'idCharge' => $this->request->getVar('idCharge')
        ];
        $data['data'] = $ChargeModel->readCharge($id);
        return view('Charge/EditCharge',$data);
        echo view('import/Footer');  
    }
   
    public function InsertCharge()
    {
        echo view('import/Header');
        $ChargeModel = new ChargeModel();

        $data = [
            'chargeName' => $this->request->getVar('chargeName')
        ];
        $ChargeModel->createCharge($data);
        $data['table'] = $ChargeModel->readCharges();
        return view('Charge/Chargelist',$data);
        echo view('import/Footer');
        
    }

    public function UpdateCharge()
    {
        echo view('import/Header');
        $ChargeModel = new ChargeModel();
        $id = ['idCharge' => $this->request->getVar('idCharge')];
        $data = [   
            'chargeName' => $this->request->getVar('chargeName')
        ];
        $ChargeModel->updateCharge($id ,$data);
        $data['data'] = $ChargeModel->readCharges();
        return view('Charge/Chargelist',$data);
        echo view('import/Footer');
      
    }

    public function DeleteCharge()
    {
        echo view('import/Header');
        $ChargeModel = new ChargeModel();

        $id = [
            'idCharge' => $this->request->getVar('idCharge')
        ];
        $data = [   
            'state' => 0
        ];
        $ChargeModel->deleteCharge($id,$data);
        $data['table'] = $ChargeModel->readCharges();
        return view('Charge/Chargelist',$data);
        echo view('import/Footer');
       
    }

    public function readCharge()
    {
        echo view('import/Header');
        $ChargeModel = new ChargeModel();
        $data['table'] = $ChargeModel->readCharges();
        return view('Charge/Chargelist',$data);
        echo view('import/Footer');
       
    }
    
}