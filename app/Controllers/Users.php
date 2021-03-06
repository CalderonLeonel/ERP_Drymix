<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;
use App\Models\Employee;
class Users extends Controller{
    public function index()
    {
        // Intento 1 Funcional
        $user = new User();
        $data['users'] = $user->orderBy('idUser','ASC')->findAll();
        //return view('shared/DashboardUsuarios',$data);
        
        /*
        $user = new User();
        $data = [
            'userName' => $this->request->getVar('userName'),
            'state' => $this->request->getVar('state')
        ];
        */
        $data['header'] = view('shared/components/header');
        $data['footer'] = view('shared/components/footer');
        //$user->select($data['heeder']);
        return view('shared/selectUsers',$data);
    }
    public function crear()
    {
        $data['header'] = view('shared/components/header');
        $data['footer'] = view('shared/components/footer');
        return view('shared/userForm',$data);
    }
    public function insertEmployee()
    {

        $employee = new Employee();
        $data = [
            'name' => $this->request->getVar('txtName'),
            'surname' => $this->request->getVar('txtSurname1'),
            'secondSurname' => $this->request->getVar('txtSurname2'),
            'email' => $this->request->getVar('txtEmail'),
            'bithdate' => $this->request->getVar('txtBirthday'),
            'employeeCode' => $this->request->getVar('txtEmployeeCode'),
            'ci' => $this->request->getVar('txtCI'),
        ];

        $employee->createEmployee($data);
    }
    public function insertUser()
    {
        $user = new User();
        $data = [
            'userName' => $this->request->getVar('txtUsername'),
            'userPassword' => $this->request->getVar('txtPassword1')
        ];

        $user->createUser($data);
    }
}
?>