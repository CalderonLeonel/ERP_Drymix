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
        //return view('UAC/DashboardUsuarios',$data);
        
        /*
        $user = new User();
        $data = [
            'userName' => $this->request->getVar('userName'),
            'state' => $this->request->getVar('state')
        ];
        */
        $data['header'] = view('UAC/components/header');
        $data['footer'] = view('UAC/components/footer');
        //$user->select($data['heeder']);
        return view('UAC/selectUsers',$data);
    }
    public function crear()
    {
        $data['header'] = view('UAC/components/header');
        $data['footer'] = view('UAC/components/footer');
        return view('UAC/userForm',$data);
    }
    public function insertarUsuario()
    {
        $user = new User();
        $employee = new Employee();
        $data1 = [
            'name' => $this->request->getVar('txtName'),
            'surname' => $this->request->getVar('txtSurname'),
            'secondSurname' => $this->request->getVar('txtSecondSurname'),
            'email' => $this->request->getVar('txtEmail'),
            'bithdate' => $this->request->getVar('txtBirthday'),
            'employeeCode' => $this->request->getVar('txtEmployeeCode'),
            'ci' => $this->request->getVar('txtCI'),
        ];
        $data1 = [
            'userName' => $this->request->getVar('userName'),
            'state' => $this->request->getVar('state')
        ];
    }
}
?>