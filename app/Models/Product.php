<?php 
namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class Product extends Model{


    public function SelectProducts(){
        
        $builder = $this->db->table('Product');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }

    /**
     * ---
     * Select
     * ---
     * Returns Product by id
     * 
     * @param int $idProduct
     */
    public function SelectProductById($idProduct)
    {
        $builder = $this->db->table('Product');
        $builder->select("*");
        $builder->where('idProduct', $idProduct);
        $builder->where('state', 1);
        $builder->orderBy('createDate');
        $query = $builder->get();
        return $query->getResult();
    }

    
    /**
     * ---
     * Select
     * --- 
     * 
     * 
     * @param int $idformat
     * 
     * Returns product by Format
     */
    public function SelectProductByFormat($idformat)
    {
        $builder = $this->db->table('Product');
        $builder->select("*");
        $builder->where('idformat', $idformat);
        $builder->where('state', 1);
        $builder->orderBy('createDate', 'asc');
        $query = $builder->get();
        return $query;
    }

    /**
     * ---
     * Select
     * ---
     * Returns product by ProductLine 
     * 
     * @param int $id
     * Returns product by ProductLine
     * 
     */
    public function SelectProductByLine($idLine)
    {
        $builder = $this->db->table('line');
        $builder->select("*");
        $builder->where('idLine', $idLine);
        $builder->where('state', 1);
        $builder->orderBy('createDate', 'asc');
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
     */
    public function InsertProduct($data)
    {
        $builder = $this->db->table('Product');

        $data = [
            'productCode' => $data['productCode'],
            'productName' => $data['productName'],
            'idProductType' => 1,
            'idFormat' => 3
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
     * @param int $idProduct
     * @param string $nameProduct
     */
    public function UpdateProduct($data, $idProduct)
    {
        $builder = $this->db->table('Product');
        $data = [
            'productName' => $data['productName'],
            'idProductType' => 1, //$data['idProductType'],
            'idFormat' => 1,//$data['idFormat'],
        ];
        $query = $builder->where('idProduct', $idProduct);
        $query = $builder->update($data);

        return $query;
    }

    public function DeleteProduct ($idProduct)
    {
        $builder = $this->db->table('Product');
        $builder->set('state', 0);
        $builder->where('idProductType',$idProduct);
        return $builder->update();

    }
   


}