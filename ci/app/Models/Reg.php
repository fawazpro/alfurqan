<?php
namespace App\Models;

use CodeIgniter\Model;

class Reg extends Model
{
    protected $table      = 'reg';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['fname','lname','pphone','dob','passport','address','gender','doc','juz','pfname','plname','phone','email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}