<?php 
namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class SaleModel extends Model{


    public function SelectSales(){
        
        $builder = $this->db->table('Sale');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }

    /**
     * ---
     * Select
     * ---
     * Returns Sale by id
     * 
     * @param int $idSale
     */
    public function SelectSaleById($idSale)
    {
        $builder = $this->db->table('Sale');
        $builder->select("*");
        $builder->where('idSale', $idSale);
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
     * Returns Sale by Format
     */
    public function SelectSaleByFormat($idformat)
    {
        $builder = $this->db->table('Sale');
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
     * Returns Sale by SaleLine 
     * 
     * @param int $id
     * Returns Sale by SaleLine
     * 
     */
    public function SelectSaleByLine($idLine)
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
     * Insert a new Sale
     * 
     * @param string $nameSale
     * @param int $SaleTypeID
     * @param int $formatID
     */
    public function InsertSale($data)
    {
        $builder = $this->db->table('Sale');

        $data = [
            'SaleName' => $data['SaleName'],
            'idSaleType' => 1,
            'idFormat' => 3
        ];

        $query = $builder->insert($data);

        return $query;
    }


    /**
     * ---
     * Update
     * ---
     * Changes data for a Sale
     * 
     * @param int $idSale
     * @param string $nameSale
     */
    public function UpdateSale($data, $idSale)
    {
        $builder = $this->db->table('Sale');
        $data = [
            'SaleName' => $data['SaleName'],
            'idSaleType' => 1, //$data['idSaleType'],
            'idFormat' => 1,//$data['idFormat'],
        ];
        $query = $builder->where('idSale', $idSale);
        $query = $builder->update($data);

        return $query;
    }

    public function DeleteSale ($idSale)
    {
        $builder = $this->db->table('Sale');
        $builder->set('state', 0);
        $builder->where('idSaleType',$idSale);
        return $builder->update();

    }
   


}