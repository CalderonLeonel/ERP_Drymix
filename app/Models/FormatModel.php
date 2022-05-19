<?php 
namespace App\Models;

use CodeIgniter\Model;

class FormatModel extends Model{
    protected $table      = 'Format';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idFormat';
    protected $allowedFields = ['formatName',  'state' ];
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';

    public function ListFormats($idFormat)
    {
        $this->select('idFormat', 'formatName', 'state');
        $this->from('Format');
        $this->where('idFormat',$idFormat);
        $this->get();
    }
}