<?php

class Application_Model_DbTable_Noticia extends Zend_Db_Table_Abstract
{

    protected $_name = 'noticia';
    protected $_rowClass= 'Application_Model_Noticia';
    
    public function cadastraNoticia($dados){
       $persistenteDenoticia =  $this->createRow();
       /*@var $persistenteDenoticia Application_Model_Noticia*/
       $persistenteDenoticia->setTitulo($dados['titulo']);
       $persistenteDenoticia->setDescricao($dados['descricao']);
       $persistenteDenoticia->setCategoria($dados['categoria']);
       $persistenteDenoticia->setCaminho_foto($dados['caminho_foto']);
       $persistenteDenoticia->setId_usuario($dados['id_usuario']);
       
       $persistenteDenoticia->save();
       
    }
    
      
    
}

