<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\MovementModel;
use App\Models\LineModel;
use App\Models\FormatModel;
use App\Models\MovementTypeModel;

class MovementsController extends BaseController{

    public function index()
    {
        echo view('Import/Header');
        echo view('Product/DashboardSCM');
        echo view('Import/Footer');
    }

    public function NewMovement(){
        
        echo view('Import/Header');
        echo view('Movement/NewMovement');
        echo view('Import/Footer');
    }

    public function InsertMovement(){
        
        $movementModel = new MovementModel();
        $formatModel = new FormatModel();

        $data = [
            //'codMovement' => $this->request->getPost('codMovement'),
            'MovementName' => $this->request->getVar('MovementName'),
            //'lineMovement' => $this->request->getPost('idLine'),
            'idMovementType' => $this->request->getVar('idTypes'),
            'idFormat' => $this->request->getVar('idFormat')
        ];

        $movementModel->InsertMovement($data);

        $table['table'] = $movementModel->SelectMovements();
        echo view('Import/Header');
        echo view('Movement/ListMovements',$table);
        echo view('Import/Footer');
    }

    public function ListMovements(){
        $movementModel = new MovementModel();



        $table['table'] = $movementModel->SelectMovements();
        echo view('Import/Header');
        echo view('Movement/ListMovements',$table);  
        echo view('Import/Footer');  
    }

    public function Update(){
        $movementModel = new MovementModel();
        $idMovement = [
            'idMovement' => $this->request->getVar('idMovement')
        ];
        $data['table'] = $movementModel->SelectMovementById($idMovement);

        echo view ("Import/Header");
        return view('Movement/UpdateMovement',$data);
        echo view ("Import/Footer");
    }

    public function UpdateMovement(){
        $movementModel = new MovementModel();
        
        $idMovement = $this->request->getPost('idMovement');

        $data = [
            'MovementName' => $this->request->getVar('MovementName'),
            //'lineMovement' => $this->request->getPost('idLine'),
            'idMovementType' => $this->request->getVar('idMovementType') ,
            'idFormat' => $this->request->getVar('idFormat')
        ];

        $movementModel->UpdateMovement($data, $idMovement);

        $table['table'] = $movementModel->SelectMovements();
        echo view('Import/Header');
        echo view('Movement/ListMovements',$table);  
        echo view('Import/Footer');  
    }

    public function InfoMovement(){
        $movementModel = new MovementModel();
        
        $idMovement = $this->request->getVar('idMovement');

        $table['table'] = $movementModel->SelectMovementById($idMovement);
        echo view('Import/Header');
        echo view('Movement/UpdateMovement',$table);
        echo view('Import/Footer');

    }
}