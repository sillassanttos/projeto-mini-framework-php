<?php

  namespace App\Models;

  use MF\Model\Model;

  class Info extends Model {

    public function getInfo() {

      $sql = "select id, titulo, descricao from tb_info";

      return $this->db->query($sql)->fetchAll();
    }

  }

?>