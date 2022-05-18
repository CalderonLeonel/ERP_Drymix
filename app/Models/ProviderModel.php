<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProviderModel extends Model{
    protected $table      = 'Provider';
    protected $primaryKey = 'idProvider';
    protected $allowedFields = ["providerName","contact","state"];

    public function readProviders()
    {
        return $this->findAll();
    }
    public function readProvider($id)
    {
        return $this->find($id);
    }
    public function createProvider($data)
    {
        return $this->insert($data);
    }
    public function updateProvider($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteProvider($id,$data)
    {
        return $this->update($id,$data);
    }
}