<?php

namespace App\Models;

use CodeIgniter\Model;

class testModel extends Model
{
    protected $table      = 'test_array_db';
    protected $primaryKey = '_id';

    protected $useAutoIncrement = true; 

    protected $allowedFields = ['image'];

    // protected bool $allowEmptyInserts = false;

    // // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
    // public function getBlogData(){
    //     return $this->findAll(); // Retrieve all records from the 'blog' table
    // }
}