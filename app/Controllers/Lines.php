<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LineModel;

class Lines extends BaseController{

    public function index()
    {
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Product/DashboardSCM');
        echo view('Import/Footer');
    }

    public function Update(){
        $lineModel = new LineModel();

        $idLine = [
            'idLine' => $this->request->getVar('idLine')
        ];

        $table['table'] = $lineModel->SelecLineById($idLine);
        echo view('Import/Header');
        echo view('Product/Line/UpdateLines',$table);  
        echo view('Import/Footer');  
    }

    public function UpdateLine(){
        
        $lineModel = new LineModel();

        $idLine = [
            'idLine' => $this->request->getVar('idLine')
        ];

        $data = [
            'lineName' => $this->request->getVar('lineName')
        ];

        $lineModel->UpdateLine($data, $idLine);

        $table['table'] = $lineModel->SelectLines();
        echo view('Imports/Header');
        echo view('Imports/asideMenu');
        echo view('Line/ListLines',$table);
        echo view('Import/Footer');
    }

    public function RegisterLine(){

        echo view('Import/Header');
        echo view('Line/NewLine');
        echo view('Import/Footer');
    }

    public function InsertLine(){
        
        $lineModel = new LineModel();

        $data = [
            //'lineCode' => $this->request->getVar('lineCode'),
            'lineName' => $this->request->getVar('lineName')
        ];

        $lineModel->InsertLine($data);

        $table['table'] = $lineModel->SelectLines();
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Line/ListLines',$table);
        echo view('Import/Footer');
    }

    public function ListLines(){
        $lineModel = new LineModel();

        $table['table'] = $lineModel->ListLines();
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Line/ListLines',$table);  
        echo view('Import/Footer');  
    }

    public function InfoLine($idLine){
        $lineModel = new LineModel();

        $idLine = [
            'idLine' => $this->request->getVar('idLine'),
        ];
        $table ['table'] = $lineModel->SelecLineById($idLine);
        echo view('Import/Header');
        echo view('Line/MInfoLine',$table);  
        echo view('Import/Footer'); 

    }
}