<?php 
namespace App\Models;

use CodeIgniter\Model;

class SectionModel extends Model{
    protected $table      = 'Section';
    protected $primaryKey = 'idSection';
    protected $allowedFields = ["SectionName","idStorage","state"];

    public function readSections()
    {
        return $this->findAll();
    }
    public function readSection($id)
    {
        return $this->find($id);
    }
    public function createSection($data)
    {
        return $this->insert($data);
    }
    public function updateSection($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteSection($id,$data)
    {
        return $this->update($id,$data);
    }
}