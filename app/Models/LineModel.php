<?php 
namespace App\Models;

use CodeIgniter\Model;

class LineModel extends Model{
    
    /**
     * ---
     * Select
     * ---
     * Returns all the product lines
     * 
     * @param int $idLines
     */
    public function ListLines()
    {
        $builder = $this->db->table('Lines');
        $builder->select("*");
        $builder->where('idLines', 1);
        $query = $builder->get();
        return $query->getResult();
        
    }
    /**
     * ---
     * InsertLine
     * ---
     * Insert Lines in DB
     * 
     * 
     */

    public function InsertLine ()
    {
        $builder = $this->db->table('Line');
        $data = [
            'LineName' => 'LineName'
        ];
        return $builder->insert($data);

    }

    public function UpdateLine ()
    {
        $builder = $this->db->table('Line');
        $data = [
            'LineName' => 'LineName'
        ];
        return $builder->update($data);

    }

    public function SelectLines ()
    {
        $builder = $this->db->table('Line');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();

    }

    public function DeleteLines ($idLine)
    {
        $builder = $this->db->table('Line');
        $data = [
            'idLine' => 'idLine'
        ];
        $builder->update($idLine, 0);

    }
}
?>