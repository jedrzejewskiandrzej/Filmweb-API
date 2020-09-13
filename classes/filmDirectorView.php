<?php

class FilmDirectorView extends FilmDirector {

  public function showFilmDirectorsStmt($id_film){
    $results = $this->getFilmDirectorsStmt($id_film);

    foreach ($results as $result) {
      $myJSON = json_encode($result);
      header("Content-Type: application/json; charset=UTF-8");
      echo $myJSON;
    }
  }
}
