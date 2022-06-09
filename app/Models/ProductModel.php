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

   
    /**
     * ---
     * Select
     * ---
     * Returns parallel by id
     * 
     * @param int $id
     */
    public function SelectParallelById($id)
    {
        $builder = $this->db->table('parallel');
        $builder->select("*");
        $builder->where('parallel_id', $id);
        $builder->where('state', 1);
        $builder->orderBy('create_date');
        $query = $builder->get();
        return $query->getResult();
    }

    /**
     * ---
     * Select
     * ---
     * Returns parallels of code 
     * 
     * @param int $id
     * Returns parallel that has the code
     * 
     * @param int $code
     */
    public function SelectProductByCode($code)
    {
        $builder = $this->db->table('parallel');
        $builder->select("*");
        $builder->where('code', $code);
        $builder->where('state', 1);
        $builder->orderBy('create_date', 'asc');
        $query = $builder->get();
        return $query;
    }

    /**
     * ---
     * Select
     * ---
     * Returns parallels of code 
     * 
     * @param int $id
     * Returns parallel that has the code
     * 
     * @param int $code
     */
    public function SelectProductByFormat($code)
    {
        $builder = $this->db->table('parallel');
        $builder->select("*");
        $builder->where('code', $code);
        $builder->where('state', 1);
        $builder->orderBy('create_date', 'asc');
        $query = $builder->get();
        return $query;
    }

    /**
     * ---
     * Select
     * ---
     * Returns parallels of code 
     * 
     * @param int $id
     * Returns parallel that has the code
     * 
     * @param int $code
     */
    public function SelectProductByProductLine($code)
    {
        $builder = $this->db->table('parallel');
        $builder->select("*");
        $builder->where('code', $code);
        $builder->where('state', 1);
        $builder->orderBy('create_date', 'asc');
        $query = $builder->get();
        return $query;
    }



    /**
     * ---
     * Insert
     * ---
     * Insert a new product
     * 
     * @param string $nameProduct
     * @param int $productTypeID
     * @param int $formatID
     * @param int $lineID
     */
    public function InsertProduct($nameProduct, $productTypeID, $formatID, $lineID)
    {
        $builder = $this->db->table('Product');

        $data = [
            'nameProduct' => $name,
            'productTypeID' => $gradeId,
            'formatID' => $number,
            'lineID' => $lineID
        ];

        $query = $builder->insert($data);

        return $query;
    }


    /**
     * ---
     * Update
     * ---
     * Changes data for a Product
     * 
     * @param int $id
     * @param string $name
     */
    public function UpdateProduct($id, $name)
    {
        $builder = $this->db->table('Product');
        $builder->set('name', $name);
        $builder->where('parallel_id', $id);
        return $builder->update();
    }

   


}