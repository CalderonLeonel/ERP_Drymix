<?php 
namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model{
    protected $table      = 'Employees';
    protected $primaryKey = 'idEmployee';

    protected $allowedFields = ['name','secondSurname','surname','email','bithdate','employeeCode', 'ci','updateDate','idDepartment', 'idCharge'];

    protected $useAutoIncrement = false;
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