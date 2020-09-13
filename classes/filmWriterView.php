<?php

class FilmWriterView extends FilmWriter{

  public function showFilmWritersStmt($id_film){
    $results = $this->getFilmWritersStmt($id_film);

    foreach ($results as $result) {
      $myJSON = json_encode($result);
      header("Content-Type: application/json; charset=UTF-8");
      echo $myJSON;
    }
  }
}
