<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductTypeModel extends Model{
    protected $table      = 'ProductType';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idProductType';
    protected $allowedFields = ['productTypeName',  'state' , 'idFormat'];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';
}