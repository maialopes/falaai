<?php

class Application_Form_Usuario extends Zend_Form
{

    public function init()
    {
       $element = new Zend_Form_Element_Text('nome');
        $element->setAttrib('class', 'input-large')
                ->setAttrib('placeholder', 'Informe seu nome')
                ->setAttrib('style', 'margin-left: 130px;')
                ->setRequired(true)
                 ->addValidator(new Zend_Validate_StringLength(array ('max' => 30))) 
                ->setAllowEmpty(false);
        
        $this->addElement($element);
        
       
        
           //Validador de Email existente
        // seta a mensagem de erro
        $element = new Zend_Form_Element_Text('email');
        $element->setAttrib('class', 'input-large')
                  ->setAttrib('placeholder', 'Informe seu email')
                ->setAttrib('style', 'margin-left: 130px;')
                ->setRequired(true)
                ->setAllowEmpty(false);
        $this->addElement($element);
        
        $element = new Zend_Form_Element_Password('senha');
        $element->setAttrib('class', 'input-large')
                ->setRequired(true)
                  ->addValidator(new Zend_Validate_StringLength(array ('max' => 8,'min'=>6))) 
                  ->setAttrib('placeholder', 'Informe sua senha')
                ->setAttrib('style', 'margin-left: 130px;')      
                ->setAllowEmpty(false);
        $this->addElement($element);
        
        $element = new Zend_Form_Element_Text('data_nascimento');
        $element->setAttrib('class', 'input-large')
                 ->setAttrib('placeholder', 'Informe sua data de nascimento')
                ->setAttrib('style', 'margin-left: 130px;')      
                ->addValidator(new Zend_Validate_Date(array('locale' => 'pt_BR')))
                ->setRequired(true)
                ->setAllowEmpty(false);
        $this->addElement($element);
        
       $element = new Zend_Form_Element_Select('sexo');
        $element->setAttrib('class', 'input-large')
                 ->setAttrib('placeholder', 'Informe sua senha')
                ->setAttrib('style', 'margin-left: 130px;');      
        $element->addMultiOptions(array('0'=>'Feminino',
            '1'=>'Masculino'
       ));
         $this->addElement($element);
       
        
        $element = new Zend_Form_Element_Submit('cadastrar');
        $element->setLabel('Cadastrar')
                ->setAttrib('class', 'btn btn-large btn')
                ->setAttrib('style', 'margin-left: 190px');
        $this->addElement($element);
        
        
    }


}

