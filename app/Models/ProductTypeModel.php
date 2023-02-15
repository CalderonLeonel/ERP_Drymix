<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\MySQLi\Builder;


class ProductTypeModel extends Model{

    public function InsertProductType($data)
    {
        $builder = $this->db->table('ProductType');

        $data = [
            'productTypeName' => $data['productTypeName'],
            'idLine' => 1
        ];

        $query = $builder->insert($data);

        return $query;
    }

    public function SelectProductTypes()
    {
        $builder = $this->db->table('ProductType');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }

    public function UpdateProductType($data, $idProductType)
    {
        $builder = $this->db->table('ProductType');

        $data = [
            'productTypeName' => $data["productTypeName"]
        ];

        $query = $builder->where('idProductType', $idProductType);
        $query = $builder->update($data);

        return $query;
    }
    public function DeleteProductType ($idProductType)
    {
        $builder = $this->db->table('ProductType');
        $builder->set('state', 0);
        $builder->where('idProductType',$idProductType);
        return $builder->update();

    }
}