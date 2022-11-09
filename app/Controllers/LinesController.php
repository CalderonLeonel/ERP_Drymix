<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LineModel;

class LinesController extends BaseController{

    public function index()
    {
        echo view('Import/header');
        echo view('Product/DashboardSCM');
        echo view('Import/footer');
    }

    public function RegisterLine(){

        echo view('Import/header');
        echo view('Product/Line/NewLine');
        echo view('Import/footer');
    }

    public function InsertLine(){
        
        $lineModel = new LineModel();

        $data = [
            'lineName' => $this->request->getVar('lineName')
        ];

        $lineModel->InsertLine($data);

        $table['table'] = $lineModel->SelectProducts();
        echo view('Imports/header');
        echo view('Product/Line/ListLines',$table);
        echo view('Import/footer');
    }

    public function ListLines(){
        $lineModel = new LineModel();

        $table['table'] = $lineModel->SelectLines();
        echo view('Import/header');
        echo view('Product/Line/ListLines',$table);  
        echo view('Import/header');  
    }

    public function InfoProduct($idProduct){

    }
}