<?php

class UsuarioController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function cadastroAction()
    {
       $form = new Application_Form_Usuario();

        if ($this->getRequest()->isPost()) {

            if ($form->isValid($_POST)) {
                $dados = $form->getValues();

                $modelUsuario = new Application_Model_DbTable_Usuarios();
                $modelUsuario->cadastraUsuario($dados);

                $this->_redirect('/');
            }
        }
        $this->view->form = $form;
    
    }

    

}

