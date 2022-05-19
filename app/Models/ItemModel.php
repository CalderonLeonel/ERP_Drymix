<?php 
namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model{
    protected $table      = 'Item';
    protected $primaryKey = 'idItem';
    protected $allowedFields = ["itemName","idItemType","state"];

    public function readItems()
    {
        return $this->findAll();
    }
    public function readItem($id)
    {
        return $this->find($id);
    }
    public function createItem($data)
    {
        return $this->insert($data);
    }
    public function updateItem($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteItem($id,$data)
    {
        return $this->update($id,$data);
    }
}