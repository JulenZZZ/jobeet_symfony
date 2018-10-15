<?php

/**
 * inicio actions.
 *
 * @package    jobeet
 * @subpackage inicio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

      if($request->getParameter('Enviar')) {
          $this->username = $request->getParameter('nombre');
          $this->lastname = $request->getParameter('apellido');

          $this->redirect('show');
      }

        //echo "Se ha metido el nombre:".$this->username." y el apellido ".$this->lastname;



/*
      //echo "Se ha metido el nombre:".$username." y el apellido ".$lastname;

      $this->jobeet_jobs = Doctrine::getTable('JobeetJob')
          ->createQuery('a')
          ->execute();

      */
  }

  public function executeHolaMundo(sfWebRequest $request)
  {

  }

  public function executeShow(sfWebRequest $request)
  {



  }
}
