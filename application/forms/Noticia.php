<?php

class Application_Form_Noticia extends Zend_Form
{

    public function init()
    {
        
        $element = new Zend_Form_Element_Text('titulo');
        $element->setAttrib('class', 'input-xxlarge')
                ->setAttrib('placeholder', 'Informe o titulo de sua noticia')
                ->setRequired(true)
                 ->addValidator(new Zend_Validate_StringLength(array ('max' => 100))) 
                ->setAllowEmpty(false);
        
        $this->addElement($element);
        
          $element = new Zend_Form_Element_Select('categoria');
        $element->setAttrib('class', 'input-large');      
        $element->addMultiOptions(array('universidade'=>'Universidade',
                                        'cidade'=>'Cidade',
                                        'politica'=>'Política',
                                        'entretenimento'=>'Entretenimento',
                                        'outros'=>'Outros'
       ));
         $this->addElement($element);
         
         $element = new Zend_Form_Element_File('caminho_foto');
        //$element->setDestination(MEDIA_PATH);
        $element->addValidator('Count', false, 1);
        $element->addValidator('Extension', false, 'jpg,png,gif')
                        ->setDestination(MEDIA_PATH)
                        ->setDescription("Envie uma foto para a notícia se disponível. Formatos permitidos: jpg, png e gif.");
        $this->addElement($element);
        
            $element = new Zend_Form_Element_Textarea('descricao');
        $element->setAttrib('style', 'width: 400px')
                ->setAttrib('rows','12')
                 ->setAttrib('placeholder', 'Descreva aqui sua notícia')
                ->addFilter(new Zend_Filter_StripTags());
        $this->addElement($element);
        
        $element = new Zend_Form_Element_Submit('cadastrar');
        $element->setLabel('Cadastrar notícia')
                ->setAttrib('class', 'btn btn-large btn')
                ->setAttrib('style', 'margin-left: 130px');
        $this->addElement($element);
    }


}

