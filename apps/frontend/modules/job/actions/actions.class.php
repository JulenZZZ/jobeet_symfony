<?php

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = new JobeetJobForm();
    }

    public function executeShow(sfWebRequest $request)
    {
        //$this->job = $this->getRoute()->getObject();
        //$id =1;
        $this->job = Doctrine_Core::getTable('JobeetJob')->createQuery('j')
            //->where('id = ?', $id)
            ->execute();

    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->form = new JobeetJobForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->form = new JobeetJobForm($this->getRoute()->getObject());
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->form = new JobeetJobForm($this->getRoute()->getObject());
        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $job = $this->getRoute()->getObject();
        $job->delete();

        $this->redirect('job/index');
    }

    public function executeContacto($request)
    {
        $this->form = new sfForm();
        $this->form->setWidgets(array(
            'nombre'  => new sfWidgetFormInputText(),
            'email'   => new sfWidgetFormInputText(array('default' => 'yo@ejemplo.com')),
            'asunto'  => new sfWidgetFormChoice(array('choices' => array('Asunto A', 'Asunto B', 'Asunto C'))),
            'mensaje' => new sfWidgetFormTextarea(),
            'asunto' => new sfWidgetFormTextarea()

        ));
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind(
            $request->getParameter($form->getName()),
            $request->getFiles($form->getName())
        );

        if ($form->isValid())
        {
            $job = $form->save();

            $this->redirect($this->generateUrl('job_show', $job));
        }
    }
}