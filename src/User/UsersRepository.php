<?php

namespace App\User;

class UsersRepository
{
  public function getModelName()
  {
    return "App\\User\\UserModel";
  }
}

  public function getTableName()
  {
    return "login";
  }

  public function findByUsername($username)
  {
    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt= $this->pdo->prepare("SELECT * FROM '$table' WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
    $user = $stmt->fetch(PDO::FETCH_CLASS);

    return $user;
  }
}
 ?>
