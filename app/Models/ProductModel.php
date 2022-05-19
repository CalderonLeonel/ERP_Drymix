<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
<<<<<<< HEAD
    protected $table      = 'Product';
    protected $primaryKey = 'idProduct';
    protected $allowedFields = ['productName',  'state', 'idProductType' , 'idFormat'];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function InsertProduct($data)
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
    }


=======
    protected $table      = 'ProductType';
    protected $primaryKey = 'IdProduct  ';
    protected $allowedFields = 'nameProduct';

    
>>>>>>> 82784e3cb500478bda335d4ba85a14485498e8a6
}