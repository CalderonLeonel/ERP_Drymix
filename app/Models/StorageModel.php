<?php 
namespace App\Models;

use CodeIgniter\Model;

class StorageModel extends Model{
    protected $table      = 'Storage';
    protected $primaryKey = 'idStorage';
    protected $allowedFields = ["storageName","state"];

    public function readStorages()
    {
        return $this->findAll();
    }
    public function readStorage($id)
    {
        return $this->find($id);
    }
    public function createStorage($data)
    {
        return $this->insert($data);
    }
    public function updateStorage($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteStorage($id,$data)
    {
        return $this->update($id,$data);
    }
}