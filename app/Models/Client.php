<?php 
namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class Client extends Model{


    public function SelectClients(){
        
        $builder = $this->db->table('Client');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }

    /**
     * ---
     * Select
     * ---
     * Returns Client by id
     * 
     * @param int $idClient
     */
    public function SelectClientById($idClient)
    {
        $builder = $this->db->table('Client');
        $builder->select("*");
        $builder->where('idClient', $idClient);
        $builder->where('state', 1);
        $builder->orderBy('createDate');
        $query = $builder->get();
        return $query->getResult();
    }

    
    



    /**
     * ---
     * Insert
     * ---
     * Insert a new Client
     * 
     * @param string $nameClient
     * @param int $ClientTypeID
     * @param int $formatID
     */
    public function InsertClient($data)
    {
        $builder = $this->db->table('Client');

        $data = [
            //'ClientCode' => $data['ClientCode'],
            'ClientName' => $data['ClientName']
        ];

        $query = $builder->insert($data);

        return $query;
    }


    /**
     * ---
     * Update
     * ---
     * Changes data for a Client
     * 
     * @param int $idClient
     * @param string $nameClient
     */
    public function UpdateClient($data, $idClient)
    {
        $builder = $this->db->table('Client');
        $data = [
            'ClientName' => $data['ClientName'],
            'idClientType' => 1, //$data['idClientType'],
            'idFormat' => 1,//$data['idFormat'],
        ];
        $query = $builder->where('idClient', $idClient);
        $query = $builder->update($data);

        return $query;
    }

    public function DeleteClient ($idClient)
    {
        $builder = $this->db->table('Client');
        $builder->set('state', 0);
        $builder->where('idClientType',$idClient);
        return $builder->update();

    }
   


}