<?php 
namespace App\Models;

use CodeIgniter\Model;

class StorageItemModel extends Model{
    protected $table      = 'Storage_Item';
    protected $allowedFields = ["idSection","idItem","idStand","stock","state"];

    public function readdata()
    {
        return $this->findAll();
    }
    public function readItem($data)
    {
        return $this->find($data);
    }
    public function createStorageItem($data)
    {
        return $this->insert($data);
    }
    public function updateStorageItem($data)
    {
        return $this->update($data);
    }
    public function deleteStorageItem($data)
    {
        return $this->update($data);
    }
}