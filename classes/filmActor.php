<?php

class FilmActor extends Dbh{

  protected function getFilmActorsStmt($id_film){
    $sql="SELECT `title`, `premiere_date`, `name`, `lastname` FROM `film` INNER JOIN `film_actor_pivot` ON `film_actor_pivot`.`id_film`=`film`.`id_film` INNER JOIN `actor` ON `film_actor_pivot`.`id_actor`=`actor`.`id_actor` WHERE `film`.`id_film`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getFilmActorsStmt($id_film){
    $sql="SELECT `title`, `premiere_date`, `name`, `lastname` FROM `film` INNER JOIN `film_actor_pivot` ON `film_actor_pivot`.`id_film`=`film`.`id_film` INNER JOIN `actor` ON `film_actor_pivot`.`id_actor`=`actor`.`id_actor` WHERE `film`.`id_film`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setFilmActorStmt($id_film,$id_actor){
     $sql = "INSERT INTO `film_actor_pivot`(`id_film`, `id_actor`) VALUES (?,?)";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_film,$id_actor]);
     $film= $stmt->fetchAll();
  }

  protected function deleteFilmActorStmt($id_film,$id_actor){
    $sql = "DELETE FROM `film_actor_pivot` WHERE `id_film`=? AND `id_actor`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film,$id_actor]);
    $id = $stmt->fetchAll();

    return $id;
  }


}

 ?>
