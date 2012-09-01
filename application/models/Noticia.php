<?php

class Application_Model_Noticia extends Zend_Db_Table_Row_Abstract

{
 
 
 public function getId_usuario() {
     return $this->id_usuario;
 }

 public function setId_usuario($id_usuario) {
     $this->id_usuario = $id_usuario;
 }

 
 public function getTitulo() {
     return $this->titulo;
 }

 public function setTitulo($titulo) {
     $this->titulo = $titulo;
 }

 public function getDescricao() {
     return $this->descricao;
 }

 public function setDescricao($descricao) {
     $this->descricao = $descricao;
 }

 public function getCategoria() {
     return $this->categoria;
 }

 public function setCategoria($categoria) {
     $this->categoria = $categoria;
 }

 
  public function getCaminho_foto() {
      return $this->caminho_foto;
  }

  public function setCaminho_foto($caminho_foto) {
      $this->caminho_foto = $caminho_foto;
  }




}

