<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;
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
}
?>