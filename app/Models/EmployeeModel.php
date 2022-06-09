<?php 
namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model{
    protected $table      = 'Employee';
    protected $primaryKey = 'idEmployee';

    protected $allowedFields = ['name','secondSurname','surname','email','bithdate','employeeCode', 'ci','updateDate','idArea', 'idCharge'];

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
    public function createEmployee($data)
    {
        return $this->insert($data);
    }
    public function readEmployees()
    {
        return $this->findAll();
    }
    public function UpdateEmployee($id,$data)
    {
        return $this->update($id,$data);
    }
}