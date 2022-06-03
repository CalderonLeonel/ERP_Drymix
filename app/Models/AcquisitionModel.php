<?php 
namespace App\Models;

use CodeIgniter\Model;

class AcquisitionModel extends Model{
    protected $table      = 'AdquisitionQuote';
    protected $primaryKey = 'idAcquisitionQuote';
    protected $allowedFields = ["name","idUser","IdProvider","quoteState"];

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