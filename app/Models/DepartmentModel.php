<?php 
namespace App\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model{
    protected $table      = 'Department';
    protected $primaryKey = 'idDepartment';
    protected $allowedFields = ["departmentName","state"];

    public function readDepartments()
    {
        return $this->findAll();
    }
    public function readDepartment($id)
    {
        return $this->find($id);
    }
    public function createDepartment($data)
    {
        return $this->insert($data);
    }
    public function updateDepartment($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteDepartment($id,$data)
    {
        return $this->update($id,$data);
    }
}