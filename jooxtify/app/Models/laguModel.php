<?php

namespace App\Models;

use CodeIgniter\Model;

class laguModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'lagu';
  protected $primaryKey       = 'ID_LAGU';
  protected $useAutoIncrement = true;
  // protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = true;
  // protected $protectFields    = true;
  protected $allowedFields    = ['ID_PENYANYI', 'ID_ALBUM', 'JUDUL_LAGU', 'FILE_LAGU', 'TAHUN_TERBIT_LAGU', 'ID_GENRE'];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  // protected $createdField  = 'created_at';
  // protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  // protected $validationRules      = [];
  // protected $validationMessages   = [];
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

  public function getAll()
  {

    $builder = $this->db->table('lagu');
    $builder->select('lagu.ID_LAGU,lagu.JUDUL_LAGU,lagu.FILE_LAGU,penyanyi.NAMA_PENYANYI,album.JUDUL_ALBUM');
    $builder->join('penyanyi', 'penyanyi.ID_PENYANYI = lagu.ID_PENYANYI');
    $builder->join('album', 'album.ID_ALBUM = lagu.ID_ALBUM');
    $builder->where('lagu.deleted_at', null);
    return $builder->get()->getResultArray();
  }
  public function getSome($nama)
  {

    $builder = $this->db->table('lagu');
    $builder->select('lagu.ID_LAGU,lagu.JUDUL_LAGU,lagu.FILE_LAGU,penyanyi.NAMA_PENYANYI,album.JUDUL_ALBUM');
    $builder->join('penyanyi', 'penyanyi.ID_PENYANYI = lagu.ID_PENYANYI');
    $builder->join('album', 'album.ID_ALBUM = lagu.ID_ALBUM');
    $builder->like("lagu.JUDUL_LAGU", $nama, 'both');
    $builder->orlike("penyanyi.NAMA_PENYANYI", $nama, 'both');
    $builder->orlike("album.JUDUL_ALBUM", $nama, 'both');
    return $builder->get()->getResultArray();
  }
  public function getLagu($id)
  {

    $builder = $this->db->table('lagu');
    $builder->select('lagu.ID_LAGU,lagu.JUDUL_LAGU,lagu.FILE_LAGU,penyanyi.NAMA_PENYANYI,album.JUDUL_ALBUM,penyanyi.FOTO,lagu.TAHUN_TERBIT_LAGU,genre.GENRE');
    $builder->join('penyanyi', 'penyanyi.ID_PENYANYI = lagu.ID_PENYANYI');
    $builder->join('album', 'album.ID_ALBUM = lagu.ID_ALBUM');
    $builder->join('genre', 'genre.ID_GENRE = lagu.ID_GENRE');
    $builder->where("lagu.ID_LAGU", $id);
    return $builder->get()->getResultArray();
  }
}
