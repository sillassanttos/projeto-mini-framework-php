<?php

  namespace App\Models;

  use MF\Model\Model;

  class Produto extends Model {

    public function getProdutos() {

      $sql = "select id, descricao, preco from tb_produtos";

      return $this->db->query($sql)->fetchAll();
    }

  }

?>