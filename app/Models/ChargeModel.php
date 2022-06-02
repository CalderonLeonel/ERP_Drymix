<?php 
namespace App\Models;

use CodeIgniter\Model;

class ChargeModel extends Model{
    protected $table      = 'Charge';
    protected $primaryKey = 'idCharge';
    protected $allowedFields = ['chargeName',  'state', 'idDepartment'];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function readCharges()
    {
        return $this->findAll();
    }
    public function readCharge($id)
    {
        return $this->find($id);
    }
    public function InsertCharge($data)
    {
        return $this->insert("Charge", $data);
    }

    public function UpdateCharge($idCharge, $data)
    {
        $this->where('idCharge',$idCharge);
		$this->update('Charge',$data);
    }

    public function DeleteCharge($idCharge)
    {
        $this->where('idCharge',$idCharge);
		$this->delete('Charge');
    }


}