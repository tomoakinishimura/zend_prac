<?php

namespace Application\Model;

class User
{
  //id
  protected $id;
  //name
  protected $name;
  //email
  protected $email;
  //password
  protected $password;
  //comment
  protected $comment;
  //url
  protected $url;

  //ctor
  public function __construct()
  {

  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function setComment($comment)
  {
    $this->comment = $comment;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

}
