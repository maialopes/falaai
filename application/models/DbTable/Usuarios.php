<?php

class Application_Model_DbTable_Usuarios extends Zend_Db_Table_Abstract
{

    protected $_name = 'usuarios';
    protected $_rowClass= 'Application_Model_Usuarios';
    
    public function cadastraUsuario($dados){
       $persistenteDeusuario =  $this->createRow();
       /*@var $persistenteDeusuario Application_Model_Usuarios*/
       $persistenteDeusuario->setNome($dados['nome']);
       $persistenteDeusuario->setEmail($dados['email']);
       $persistenteDeusuario->setData_nascimento($dados['data_nascimento']);
       $persistenteDeusuario->setSexo($dados['sexo']);
       $persistenteDeusuario->setSenha($dados['senha']);
       
       $persistenteDeusuario->save();
    }
    
    public function inserirEeditarFotoDousuario($id_usuario,$caminho_foto){
        $persistenteDeUsuario = $this->find($id_usuario)->current();
         /*@var $persistenteDeUsuario Application_Model_Usuarios*/
        $persistenteDeUsuario->setCaminho_foto($caminho_foto);
        
        $persistenteDeUsuario->save();
    }

    
    public function editarUsuario($dados){
        $persistenteDeusuario = $this->find($dados['id_usuario'])->current();
          /*@var $persistenteDeusuario Application_Model_Usuarios*/
       $persistenteDeusuario->setNome($dados['nome']);
       $persistenteDeusuario->setEmail($dados['email']);
       $persistenteDeusuario->setData_nascimento($dados['data_nascimento']);
       $persistenteDeusuario->setSexo($dados['sexo']);
        $persistenteDeusuario->setSenha($dados['senha']);
       
       $persistenteDeusuario->save();
       
    }
    
    public function removerUsuario($id_usuario){
         $persistenteDeusuario = $this->find($dados['id_usuario'])->current();
         $persistenteDeusuario->delete('id_usuario ='.$id_usuario);
    }
      

}

