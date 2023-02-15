<?php 
namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class FactoryModel extends Model{


    public function SelectFactories(){
        
        $builder = $this->db->table('Factory');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }

    /**
     * ---
     * Insert
     * ---
     * Insert a new Factory
     * 
     * @param string $nameFactory
     * @param int $FactoryTypeID
     * @param int $formatID
     */
    public function InsertFactory($data)
    {
        $builder = $this->db->table('Factory');

        $data = [
            'factoryName' => $data['factoryName'],
            'address' => $data['address']
        ];

        $query = $builder->insert($data);

        return $query;
    }


    /**
     * ---
     * Update
     * ---
     * Changes data for a Factory
     * 
     * @param int $idFactory
     * @param string $nameFactory
     */
    public function UpdateFactory($data, $idFactory)
    {
        $builder = $this->db->table('Factory');
        $data = [
            'factoryName' => $data['factoryName'],
        ];
        $builder->where('idFactory', $idFactory);

        return $builder->update($data);
    }

    public function DeleteFactory ($idFactory)
    {
        $builder = $this->db->table('Factory');
        $builder->set('state', 0);
        $builder->where('idFactory',$idFactory);
        return $builder->update();

    }
   


}