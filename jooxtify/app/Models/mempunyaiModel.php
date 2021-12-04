<?php

namespace App\Models;

use CodeIgniter\Model;

class mempunyaiModel extends Model
{
  protected $tablename = "mempunyai";

  public function ins($idlagu, $idgenre)
  {
    return $this->db->query("INSERT INTO $this->tablename '$idlagu', '$idgenre'");
  }
  public function updt($idlagu, $idgenre)
  {
    return $this->db->query("UPDATE $this->tablename '$idlagu', '$idgenre'");
  }
  public function del($idlagu, $idgenre)
  {
    return $this->db->query("INSERT INTO $this->tablename '$idlagu', '$idgenre'");
  }
}
