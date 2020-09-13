<?php

class FilmWriter extends Dbh{

  protected function getFilmWritersStmt($id_film){
    $sql="SELECT `title`, `premiere_date`, `name`, `lastname` FROM `film` INNER JOIN `film_writer_pivot` ON `film_writer_pivot`.`id_film`=`film`.`id_film` INNER JOIN `writer` ON `film_writer_pivot`.`id_writer`=`writer`.`id_writer` WHERE `film`.`id_film`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setFilmWriterStmt($id_film,$id_writer){
     $sql = "INSERT INTO `film_writer_pivot`(`id_film`, `id_writer`) VALUES (?,?)";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_film,$id_writer]);
     $film= $stmt->fetchAll();
  }

  protected function deleteFilmWriterStmt($id_film,$id_writer){
    $sql = "DELETE FROM `film_writer_pivot` WHERE `id_film`=? AND `id_writer`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film,$id_writer]);
    $id = $stmt->fetchAll();

    return $id;
  }


}

 ?>
