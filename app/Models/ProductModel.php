<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
    protected $table      = 'Product';
    protected $primaryKey = 'idProduct';
    protected $allowedFields = ['productName',  'state'];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    /*public function InsertProduct($data)
    {
        return $this->insert("Product", $data);
    }

    public function UpdateProduct($idProduct, $data)
    {
        $this->where('idProduct',$idProduct);
		$this->update('Product',$data);
    }

    public function DeleteProduct($idProduct)
    {
        $this->where('idProduct',$idProduct);
		$this->delete('Product');
    }*/

    public function readProducts()
    {
        return $this->findAll();
    }
    public function readProduct($id)
    {
        return $this->find($id);
    }
    public function createProduct($data)
    {
        return $this->insert($data);
    }
    public function updateProduct($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteProduct($id,$data)
    {
        return $this->update($id,$data);
    }


}