<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
    protected $table      = 'ProductType';
    protected $primaryKey = 'IdProduct  ';
    protected $allowedFields = 'nameProduct';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

 
}