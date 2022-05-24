<?php 
namespace App\Models;

use CodeIgniter\Model;

class LineModel extends Model{
    protected $table      = 'Line';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idLine';
    protected $allowedFields = ['lineName',  'state' ];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';

    protected  $db      = \Config\Database::connect();
    protected  $builder = $db->table('Products');
    public function ListLines($idLines)
    {
        $this->builder->select('idLine', 'lineName', 'state');
        $this->from('Line');
        $this->where('idLine',$idLines);
        $this->get();
    }

    public function InsertProduct ()
    {
        $this->builder->insert()
    }

    
}