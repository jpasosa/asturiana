<?php

/**
 * @package    Dondestudiar
 * @author     Cooperativa Hormigón
 */
class ContactoForm extends BaseForm
{
  public function configure() {
    $this->setWidgets(array(
      'nombre'    => new sfWidgetFormInputText(),
      'email'     => new sfWidgetFormInputText(),
      'telefono'  => new sfWidgetFormInputText(),
      'comentarios' => new sfWidgetFormTextarea(),
    ));

    $this->widgetSchema->setNameFormat('contacto[%s]');
    
    $this->setValidators(array(
      'nombre'    => new sfValidatorString(array('required' => false)),
      'email'     => new sfValidatorEmail(array(), array(
                       'required' => 'Debes ingresar tu email',
                       'invalid'  => 'Debes ingresar un email válido')),
      'telefono'  => new sfValidatorString(array('required' => false)),
      'comentarios' => new sfValidatorString(array(), array(
                       'required' => 'Olvidaste ingresar el comentario')),
    ));

    $this->widgetSchema->setLabels(array(
      'nombre'    => 'Nombre',
      'email'     => 'E-mail',
      'telefono'  => 'Teléfono',
      'comentarios' => 'Comentarios',
    ));
    
    $this->widgetSchema->setFormFormatterName('list');
  }
}