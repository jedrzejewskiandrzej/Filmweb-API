<?php

class FilmActorContr extends FilmActor {

  public function createFilmActorStmt($id_flmm,$id_actor){
    $this->setFilmActorStmt($id_flmm,$id_actor);
  }

  public function delFilmActorStmt($id_flmm,$id_actor){
    $this->deleteFilmActorStmt($id_flmm,$id_actor);
  }

}
