<?php 
namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class ProductModel extends Model{
    /*protected $table      = 'Product';
    protected $primaryKey = 'idProduct';
    protected $allowedFields = ['productName',  'state'];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';*/

    public function InsertProduct($data)
    {
        $builder = $this->db->table('Product');
        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        return $this->$builder->insert("Product", $data);
    }

    public function UpdateProduct($idProduct, $data)
    {
        $builder = $this->db->table('Product');
        $data = [
            'nameProduct' => $this->request->getVar('nameProduct'),
            'IdLine'  => $this->request->getVar('lineProduct'),
            'IdFormat' => $this->request->getVar('formatProduct')
        ];
        $query = $builder->update($data);
        $query = $builder->where('idProduct',$idProduct);
        return $this->$builder->update($data);
    }

    public function DeleteProduct($idProduct, $state)
    {
        $builder = $this->db->table('Product');
        $query = $builder->update($state, 0);
        $query = $builder->where('idProduct',$idProduct);

        return $query->db->update();
		
    }

    public function SelectProducts()
    {
        $builder = $this->db->table('Product');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();

    }

   


}