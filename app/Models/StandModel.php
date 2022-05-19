<?php 
namespace App\Models;

use CodeIgniter\Model;

class StandModel extends Model{
    protected $table      = 'Stand';
    protected $primaryKey = 'idStand';
    protected $allowedFields = ["StandName","idSection","state"];

    public function readStands()
    {
        return $this->findAll();
    }
    public function readStand($id)
    {
        return $this->find($id);
    }
    public function createStand($data)
    {
        return $this->insert($data);
    }
    public function updateStand($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteStand($id,$data)
    {
        return $this->update($id,$data);
    }
}