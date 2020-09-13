<?php

class FilmContr extends Film {

  public function createFilmStmt($filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry){
    $this->setFilmStmt($filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry);
  }

  public function delFilmStmt($id_film){
    $this->deleteFilmStmt($id_film);
  }

  public function upFilmStmt($id_film, $filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry){
    $this->updateFilmStmt($id_film, $filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry);
  }

}
