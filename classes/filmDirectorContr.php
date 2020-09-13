<?php

class FilmDirectorContr extends FilmDirector {

  public function createFilmDirectorStmt($id_flmm,$id_director){
    $this->setFilmDirectorStmt($id_flmm,$id_director);
  }

  public function delFilmDirectorStmt($id_flmm,$id_director){
    $this->deleteFilmDirectorStmt($id_flmm,$id_director);
  }

}
