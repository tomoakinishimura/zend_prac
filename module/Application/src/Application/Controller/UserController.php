<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\User;

class UserController extends AbstractActionController
{
  //ユーザーテーブル
  protected $userTable;

  public function indexAction()
  {
    return new ViewModel();
  }

  //add action
  public function addAction()
  {

    $user = new User();
    $user->name = "hogehoge";
    $user->email = "test@test.com";

    $this->getUserTable()->saveUser($user);

    $values = array(
      'key1' => 'value1',
      'key2' => 'value2',
    );
    $view = new ViewModel($values);

    return $view;
  }

  public function getUserTable()
  {

    if(!$this->userTable){
      $sm = $this->getServiceLocator();
      $this->userTable = $sm->get('Application\Model\UserTable');
    }
    return $this->userTable;
  }

}
