<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
  public function indexAction()
  {
    return new ViewModel();
  }

  //add action
  public function addAction()
  {
    return new ViewModel();
  }

}
