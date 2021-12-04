<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'user';
  protected $primaryKey       = 'ID_USER';
  protected $useAutoIncrement = true;
  // protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ['USERNAME','EMAIL','PASSWORD','STATUS_USER'];

  // Dates
  // protected $useTimestamps = false;
  // protected $dateFormat    = 'datetime';
  // protected $createdField  = 'created_at';
  // protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [
      'USERNAME' => 'required',
      'EMAIL' => 'required|valid_email|is_unique[user.EMAIL]',
      'PASSWORD' => 'required'
  ];
  protected $validationMessages   = [
      'EMAIL' =>[
          'is_unique' => 'Gunakan email yang lain'
      ]
  ];
  // protected $skipValidation       = false;
  // protected $cleanValidationRules = true;

  // Callbacks
  // protected $allowCallbacks = true;
  // protected $beforeInsert   = [];
  // protected $afterInsert    = [];
  // protected $beforeUpdate   = [];
  // protected $afterUpdate    = [];
  // protected $beforeFind     = [];
  // protected $afterFind      = [];
  // protected $beforeDelete   = [];
  // protected $afterDelete    = [];
}

