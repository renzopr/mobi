<?php

/**
 *
 */
class LoginController extends AbstractController
{

  public function __construct(UsersRepository $usersRepository)
  {
    $this->usersRepository = $usersRepository;
  }

  public function login()
  {
    $this->render("user/login", []);
  }
}

?>
