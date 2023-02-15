<?php 
namespace App\Models;

use CodeIgniter\Model;

class MovementModel extends Model{
    
    /**
     * ---
     * InsertMovement
     * ---
     * Insert Movements in DB
     * 
     * 
     */

    public function InsertMovement ($data)
    {
        $builder = $this->db->table('Movement');
        $data = [
            'quantity' => 'quantity' 
        ];
        return $builder->insert($data);

    }

    public function UpdateMovement($data, $idMovement)
    {
        $builder = $this->db->table('Movement');

        $data = [
            'quantity' => 'quantity'
        ];

        $query = $builder->where('idMovement', $idMovement);
        $query = $builder->update($data);

        return $query;
    }

    public function SelectMovements()
    {
        $builder = $this->db->table('Movement');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();

    }

    public function SelecMovementById($idMovement)
    {
        $builder = $this->db->table('Movement');
        $builder->select("*");
        $builder->where('idMovement', $idMovement);
        $builder->where('state', 1);
        $builder->orderBy('createDate');
        $query = $builder->get();
        return $query->getResult();
    }

    public function SelecMovementByTypeMovement($idMovement)
    {
        $builder = $this->db->table('Movement');
        $builder->select("*");
        $builder->where('idMovement', $idMovement);
        $builder->where('state', 1);
        $builder->orderBy('createDate');
        $query = $builder->get();
        return $query->getResult();
    }


    public function SelectMovementByDate($idMovement)
    {
        $builder = $this->db->table('Movement');
        $builder->select("*");
        $builder->where('idMovement', $idMovement);
        $builder->where('state', 1);
        $builder->where('createDate', );
        $builder->orderBy('createDate');
        $query = $builder->get();
        return $query->getResult();
    }

    public function DeleteMovements ($idMovement)
    {
        $builder = $this->db->table('Movement');
        $builder->set('state', 0);
        $builder->where('idMovement',$idMovement);
        return $builder->update();

    }
}
?>