<?php

class FilmView extends Film {

  public function showFilms(){
    $results = $this->getFilms();

    foreach ($results as $result) {
      $myJSON = json_encode($result);
      echo $myJSON;
    }
  }

  public function showFilmStmt($id_director){
    $result = $this->getFilmStmt($id_director);
    $myJSON = json_encode($result);
    echo $myJSON;
  }

}
