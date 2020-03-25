<?php
namespace App\Projects;

use PDO;

/**
 *
 */
class ProjectsRepository
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  function fetchProjects()
  {
    //global $pdo;
    return $this->pdo->query("SELECT * FROM `projects`");
  }
}

 ?>
