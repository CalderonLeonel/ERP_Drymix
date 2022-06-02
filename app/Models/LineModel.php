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
    public function ListLines($idLines)
    {
        $builder = $this->db->table('Lines');
        $builder->select("*");
        $builder->where('idLines', $idLines);
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
        $builder = $this->db->table('Product');
        $data = [
            'LineName' => '@variable de la Vista'
        ];
        $query = $builder->insert($data);

    }

    public function UpdateLine ()
    {
        $builder = $this->db->table('Product');
        $data = [
            'LineName' => '@variable de la Vista'
        ];
        $query = $builder->insert($data);

    }

    public function SelectLines ()
    {
        $builder = $this->db->table('Product');
        $data = [
            'LineName' => '@variable de la Vista'
        ];
        $query = $builder->insert($data);

    }


}
?>