<?php 
namespace App\Models;

use CodeIgniter\Model;

class FormatModel extends Model{

    public function ListFormats($idFormat)
    {
        $this->select('idFormat', 'formatName', 'state');
        $this->from('Format');
        $this->where('idFormat',$idFormat);
        $this->get();
    }

    public function SelectFormat ()
    {
        $builder = $this->db->table('Format');
        $query = $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }

    public function DeleteFormat($idFormat){
        $builder = $this->db->table('Format');
        $builder->set('state', 0);
        $builder->where('idFormat',$idFormat);
        return $builder->update();
    }
}