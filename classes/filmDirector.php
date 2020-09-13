<?php

class FilmDirector extends Dbh{

  protected function getFilmDirectorsStmt($id_film){
    $sql="SELECT `title`, `premiere_date`, `name`, `lastname` FROM `film` INNER JOIN `film_director_pivot` ON `film_director_pivot`.`id_film`=`film`.`id_film` INNER JOIN `director` ON `film_director_pivot`.`id_director`=`director`.`id_director` WHERE `film`.`id_film`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setFilmDirectorStmt($id_film,$id_director){
     $sql = "INSERT INTO `film_director_pivot`(`id_film`, `id_director`) VALUES (?,?)";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_film,$id_director]);
     $film= $stmt->fetchAll();
  }

  protected function deleteFilmDirectorStmt($id_film,$id_director){
    $sql = "DELETE FROM `film_director_pivot` WHERE `id_film`=? AND `id_director`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film,$id_director]);
    $id = $stmt->fetchAll();

    return $id;
  }


}

 ?>
