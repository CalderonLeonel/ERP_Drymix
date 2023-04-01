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
        $builder = $this->db->table('Line');
        $builder->select("*");
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

    public function InsertLine ($data)
    {
        $builder = $this->db->table('Line');
        $data = [
            //'lineCode' => 'LineCode'
            'lineName' => $data['lineName']
        ];
        return $builder->insert($data);

    }

    public function UpdateLine($data, $idLine)
    {
        $builder = $this->db->table('Line');

        $data = [
            'lineName' => $data["lineName"]
        ];

        $query = $builder->where('idLine', $idLine);
        $query = $builder->update($data);

        return $query;
    }


    public function SelecLineById($idLine)
    {
        $builder = $this->db->table('Line');
        $builder->select("*");
        $builder->where('idLine', $idLine);
        $builder->where('state', 1);
        $builder->orderBy('createDate');
        $query = $builder->get();
        return $query->getResult();
    }

    public function DeleteLines ($idLine)
    {
        $builder = $this->db->table('Line');
        $builder->set('state', 0);
        $builder->where('idLine',$idLine);
        return $builder->update();

    }
}
?>