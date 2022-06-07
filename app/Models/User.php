<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Config;

class User extends Model{
    protected $table      = 'User';
    protected $primaryKey = 'idUser';

    //protected $db      = Database::connect();
    //protected $builder = $db->table('users');

    protected $allowedFields = ['userName','userPassword'];

    protected $useTimestamps = true;
    protected $createdField  = 'createDate';
    protected $updatedField  = 'updateDate';



    public function createUser($data)
    {
        return $this->insert($data);
    }
}