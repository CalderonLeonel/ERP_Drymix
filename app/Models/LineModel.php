<?php 
namespace App\Models;

use CodeIgniter\Model;

class LineModel extends Model{
    protected $table      = 'Line';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $allowedFields = ['lineName',  'state' ];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';

    public function ListLines($idLines)
    {
        $this->select('idLine', 'lineName', 'state');
        $this->from('Line');
        $this->where('idLine',$idLines);
        $this->get();
    }
}