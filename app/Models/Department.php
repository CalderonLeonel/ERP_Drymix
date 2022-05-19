<?php 
namespace App\Models;

use CodeIgniter\Model;

class Department extends Model{
    protected $table      = 'Department';
    protected $primaryKey = 'idDepartment';

    protected $allowedFields = [''];

    //protected $useAutoIncrement = false;
    protected $useTimestamps = true;
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';
    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;
    //protected $deletedField  = 'deleted_at';
    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;
}