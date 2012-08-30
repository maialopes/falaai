<?php

class Application_Model_Usuarios extends Zend_Db_Table_Row_Abstract

{
 
  
  public function getId_usuario() {
      return $this->id_usuario;
  }

  public function setId_usuario($id_usuario) {
      $this->id_usuario = $id_usuario;
  }

  public function getNome() {
      return $this->nome;
  }

  public function setNome($nome) {
      $this->nome = $nome;
  }

  public function getEmail() {
      return $this->email;
  }

  public function setEmail($email) {
      $this->email = $email;
  }

  public function getSexo() {
      return $this->sexo;
  }

  public function setSexo($sexo) {
      $this->sexo = $sexo;
  }

  public function getData_nascimento() {
      return $this->data_nascimento;
  }

  public function setData_nascimento($data_nascimento) {
      $this->data_nascimento = $data_nascimento;
  }

  public function getCaminho_foto() {
      return $this->caminho_foto;
  }

  public function setCaminho_foto($caminho_foto) {
      $this->caminho_foto = $caminho_foto;
  }




}

