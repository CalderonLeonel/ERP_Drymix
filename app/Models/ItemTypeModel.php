<?php 
namespace App\Models;

use CodeIgniter\Model;

class ItemTypeModel extends Model{
    protected $table      = 'ItemType';
    protected $primaryKey = 'idItemType';
    protected $allowedFields = ["itemTypeName","state"];

    public function readItemTypes()
    {
        return $this->findAll();
    }
    public function readItemType($id)
    {
        return $this->find($id);
    }
    public function createItemType($data)
    {
        return $this->insert($data);
    }
    public function updateItemType($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteItemType($id,$data)
    {
        return $this->update($id,$data);
    }
}