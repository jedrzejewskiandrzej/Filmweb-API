<?php

class FilmWriterContr extends FilmWriter {

  public function createFilmWriterStmt($id_flmm,$id_writer){
    $this->setFilmWriterStmt($id_flmm,$id_writer);
  }

  public function delFilmWriterStmt($id_flmm,$id_writer){
    $this->deleteFilmWriterStmt($id_flmm,$id_writer);
  }

}
