<?php 
namespace App\Models;

use CodeIgniter\Model;

class AcquisitionModel extends Model{
    protected $table      = 'AcquisitionQuote';
    protected $primaryKey = 'idAcquisitionQuote';
    protected $allowedFields = ["name","idUser","quoteState"];

    public function readAcquisitions()
    {
        return $this->findAll();
    }
    public function readAcquisition($id)
    {
        return $this->find($id);
    }
    public function createAcquisition($data)
    {
        return $this->insert($data);
    }
    public function updateAcquisition($id,$data)
    {
        return $this->update($id,$data);
    }
    public function deleteAcquisition($id,$data)
    {
        return $this->update($id,$data);
    }
}