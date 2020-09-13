<?php

class DirectorView extends Director {

  public function showDirectors(){
    $results = $this->getDirectors();

    foreach ($results as $result) {
      $myJSON = json_encode($result);
      header("Content-Type: application/json; charset=UTF-8");
      echo $myJSON;
    }
  }

  public function showDirectorStmt($id_director){
    $result = $this->getDirectorStmt($id_director);
    $myJSON = json_encode($result);
    header("Content-Type: application/json; charset=UTF-8");
    echo $myJSON;
  }

}
