<?php

namespace App\Service;

use Doctrine\DBAL\Driver\Connection;

class DataService
{
    private $conn;

    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    /**
     * Finds all FunctionList
     */
    public function getAllPermissionList() {

        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder->select('*')
          ->from('permission_lists pl')
          ->where('pl.is_side_menu = 1');

        $data = $queryBuilder->execute()->fetchAll();

        return $data;
    }

    /**
     * Finds all System Modules
     */
    public function getAllSystemModule() {

        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder->select('*')
          ->from('system_modules sm')
          ->orderBy('sm.position', 'ASC');

        $data = $queryBuilder->execute()->fetchAll();

        return $data;
    }

    /**
     * Count System Modules without active function
     */

    public function getCountMOduleWOFunction($module_id) {
      $queryBuilder = $this->conn->createQueryBuilder();
      $queryBuilder->select('count(pl.id) as countLink')
        ->from('permission_lists pl')
        ->where('pl.module_id = '.$module_id);

      $data = $queryBuilder->execute()->fetchAll();
      return $data[0]['countLink'];
    }
}
