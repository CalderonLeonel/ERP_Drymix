<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;
use App\Models\Employee;
class UserController extends BaseController{
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
        return view('UAC/selectUsers',$data);
    }
    public function crear()
    {
        $data['header'] = view('shared/components/header');
        $data['footer'] = view('shared/components/footer');
        return view('UAC/userForm',$data);
    }
    public function login()
    {
        $data['header'] = view('import/header');
        $data['footer'] = view('import/footer');
        return view('UAC/Login', $data);
    }
    
    /**
     * -----
     * Login
     * -----
     * Autentifica el usuario
     * 
     * @param 
     * 
     * return view('DashboardUsuarios')
     */
    public function btnLogin()
    {
        $username = $this->request->getVar('txtUsername');
        $password = $this->request->getVar('txtPassword');
        
        $user = new User();
        $data['username'] = $user->where('userName',$username)->first();
        $data['password'] = $user->where('userPassword',$username)->first();
        
        if($data['username'] !='' && $data['password'] !='')
        {
            $user1 = new User();
            $data1['users'] = $user1->orderBy('idUser','ASC')->findAll();
            $data1['header'] = view('shared/components/header');
            $data1['footer'] = view('shared/components/footer');
            return view('DashboardPrincipal', $data1);
        }
        else
        {
            redirect(base_url('login'));
        }
        //return view('UAC/Login', $data);
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