<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\Client;
use App\Models\ClientModel;

class Clients extends BaseController
{

    public function index()
    {
        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Client/DashboardClients');
        echo view('Import/Footer');
    }

    public function RegisterClient()
    {
        echo view('Import/Header');
        echo view('Client/NewClient');
        echo view('Import/Footer');
    }

    public function InsertClient()
    {

        $data = [
            //'ClientCode' => $this->request->getVar('ClientCode'),
            'ClienteName' => $this->request->getVar('ClienteName')
        ];

        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Client/ListClients');
        echo view('Import/Footer');
    }

    public function ListClients()
    {
        $clientModel = new Client();

        $table['table'] = $clientModel->SelectClients();

        echo view('Import/Header');
        echo view('Import/asideMenu');
        echo view('Client/ListClients', $table);
        echo view('Import/Footer');
    }


    public function Update()
    {

        $clientModel = new Client();

        $idClient = [
            'idClient' => $this->request->getVar('idClient')
        ];
        $data['table'] = $clientModel->SelectClientById($idClient);

        echo view("Import/Header");
        return view('Cliente/UpdateCliente', $data);
        echo view("Import/Footer");
    }

    public function UpdateCliente()
    {
        $clientModel = new Client();

        $idClient = $this->request->getPost('idClient');

        $data = [
            'ClienteName' => $this->request->getVar('ClienteName'),
            //'lineCliente' => $this->request->getPost('idLine'),
            'idClientType' => $this->request->getVar('idClientType'),
            'idFormat' => $this->request->getVar('idFormat')
        ];

        $clientModel->UpdateCliente($data, $idClient);

        echo view('Import/Header');
        echo view('Cliente/ListClientes');
        echo view('Import/Footer');
    }

    public function InfoCliente()
    {
        $clientModel = new Client();

        $idClient = $this->request->getVar('idClient');

        $table['table'] = $clientModel->SelectClienteById($idClient);
        echo view('Import/Header');
        echo view('Cliente/UpdateCliente', $table);
        echo view('Import/Footer');
    }
}
