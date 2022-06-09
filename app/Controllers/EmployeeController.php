<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmployeeModel;
use App\Models\ChargeModel;
use App\Models\DepartmentModel;
class EmployeeController extends BaseController{
    public function index()
    {
        echo view('import/Header');
        $EmployeeModel = new EmployeeModel();
        $ChargeModel = new ChargeModel();
        $departmentModel = new DepartmentModel();
        $data['table'] = $EmployeeModel->readEmployees();
        $data['charges'] = $ChargeModel->readCharges();
        $data['departments'] = $departmentModel->readDepartments();
        return view('HRM/AssignEmployee',$data);
        echo view('import/Footer');    
    }
    public function UpdateEmployeeCharge()
    {
        echo view('import/Header');
        $EmployeeModel = new EmployeeModel();
        $ChargeModel = new ChargeModel();
        $departmentModel = new DepartmentModel();
        $id = ['idEmployee' => $this->request->getVar('idEmployee')];
        $data = [   
            'idCharge' => $this->request->getVar('stateSelect')  
        ];

        $EmployeeModel->UpdateEmployee($id ,$data);
        $table['table'] = $EmployeeModel->readEmployees();
        $table['departments'] = $departmentModel->readDepartments();
        $table['charges'] = $ChargeModel->readCharges();
        return view('HRM/AssignEmployee',$table);
        echo view('import/Footer');
      
    }
}