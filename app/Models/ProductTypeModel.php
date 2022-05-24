<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductTypeModel extends Model{
    protected $table      = 'ProductType';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idProductType';
    protected $allowedFields = ['productTypeName',  'state'];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';

    public function readProductsType()
    {
        return $this->findAll();
    }
    public function readProductType($id)
    {
        return $this->find($id);
    }
    public function createProductType($data)
    {
        return $this->insert($data);
    }
    public function updateProductType($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteProductType($id,$data)
    {
        return $this->update($id,$data);
    }
}