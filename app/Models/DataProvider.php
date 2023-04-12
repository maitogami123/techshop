<?php 

namespace App\Models;

use PDO;

class DataProvider {
  
  protected function query($sql, $sql_param = [])
  {
    // TODO: Create query method
    // $db = $this->connect(DB);

    // if ($db === null)
    //   return [];

    // if (empty($sql_param)) {
    //   $query = $db->query($sql);
    // } else {
    //   $query = $db->prepare($sql);
    //   $query->execute($sql_param);
    // }

    // $data = $query->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

    // // Clear resources
    // $query = null;
    // $db = null;

    // return $data;
  }

  protected function execute($sql, $sql_param)
  {
    // TODO: Create execute method
    // $db = $this->connect();

    // if ($db == null) {
    //   return null;
    // }

    // $stm = $db->prepare($sql);

    // $stm->execute($sql_param);

    // $stm = null;
    // $db = null;
  }

  protected function connect($source)
  {
    try {
      return new PDO($source, DB_USER, DB_PASS);
    } catch (PDOException $e) {
      return null;
    }
  }
}
