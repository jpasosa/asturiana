<?php

/**
 * contacto actions.
 *
 * @package    asturiana
 * @subpackage contacto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactoActions extends aEngineActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request) {
    $this->form = new ContactoForm();
    if ($request->isMethod('post')):
      $this->form->bind($request->getParameter('contacto'));
      if ($this->form->isValid()):
      
        $cuerpo = 'Nombre:'."\n".$this->form->getValue('nombre')."\n\n";
        $cuerpo .= 'Email:'."\n".$this->form->getValue('email')."\n\n";
        $cuerpo .= 'Teléfono:'."\n".$this->form->getValue('telefono')."\n\n";
        $cuerpo .= 'Comentarios:'."\n".$this->form->getValue('comentarios')."\n";
        
        $from = array('dadgrafica@gmail.com' => 'dondestudiar.com.ar');
        
        $this->getMailer()->composeAndSend(
          $from,
          'juanpablososa@gmail.com',
          'Dondestudiar :: Contacto desde el Sitio Web',
          $cuerpo
        );
        
        $this->redirect('contacto/gracias');
        //$this->redirect('contacto/gracias?'.http_build_query($request->getParameter('contacto')));
        // $values = $this->form->getValues();
      endif;
    endif;
  }
    
  public function executeGracias() {
  }





}
