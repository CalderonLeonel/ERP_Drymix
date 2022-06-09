<?php

namespace App\Controllers;
use App\Models\DepartmentModel;
class DepartmentController extends BaseController
{
    public function index()
    {
        echo view('import/Header');
        $departmentModel = new DepartmentModel();
        $data['table'] = $departmentModel->readDepartments();
        return view('Department/Departmentlist',$data);
        echo view('import/Footer');
      
       
    }
    public function createDepartment()
    {
        echo view('import/Header');
        return view('Department/CreateDepartment');
        echo view('import/Footer');
    }
    public function editDepartment()
    {
        echo view('import/Header');
        $departmentModel = new DepartmentModel();
        $id = [
            'idDepartment' => $this->request->getVar('idDepartment')
        ];
        $data['data'] = $departmentModel->readDepartment($id);
        return view('Department/EditDepartment',$data);
        echo view('import/Footer');  
    }
   
    public function InsertDepartment()
    {
        echo view('import/Header');
        $departmentModel = new DepartmentModel();

        $data = [
            'DepartmentName' => $this->request->getVar('DepartmentName')
        ];
        $departmentModel->createDepartment($data);
        $data['table'] = $departmentModel->readDepartments();
        return view('Department/Departmentlist',$data);
        echo view('import/Footer');
        
    }

    public function UpdateDepartment()
    {
        echo view('import/Header');
        $departmentModel = new DepartmentModel();
        $id = ['idDepartment' => $this->request->getVar('idDepartment')];
        $data = [   
            'DepartmentName' => $this->request->getVar('DepartmentName')
        ];
        $departmentModel->updateDepartment($id ,$data);
        $data['data'] = $departmentModel->readDepartments();
        return view('Department/Departmentlist',$data);
        echo view('import/Footer');
      
    }

    public function DeleteDepartment()
    {
        echo view('import/Header');
        $departmentModel = new DepartmentModel();

        $id = [
            'idDepartment' => $this->request->getVar('idDepartment')
        ];
        $data = [   
            'state' => 0
        ];
        $departmentModel->deleteDepartment($id,$data);
        $data['table'] = $departmentModel->readDepartments();
        return view('Department/Departmentlist',$data);
        echo view('import/Footer');
       
    }

    public function readDepartment()
    {
        echo view('import/Header');
        $departmentModel = new DepartmentModel();
        $data['table'] = $departmentModel->readDepartments();
        return view('Department/Departmentlist',$data);
        echo view('import/Footer');
       
    }
    
}
