<?php

class Film extends Dbh{

  protected function getFilms(){
    $sql="SELECT * FROM `film`";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getFilmStmt($id_film){
     $sql="SELECT * FROM `film` WHERE `id_film`=?";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_film]);
     $id = $stmt->fetchAll();

     return $id;
  }

  protected function getFilmScoreStmt($id_film){
     $sql="SELECT `id_film`, AVG(`rating`) AS `rating` FROM `user_rating` WHERE `id_film`=2";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_film]);
     $id = $stmt->fetchAll();

     return $id;
  }

  protected function setFilmStmt($filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry){
     $sql = "INSERT INTO `film`(`id_film`, `title`, `premiere_date`, `length`,`id_category`, `id_country`) VALUES (NULL,\"$filmTitle\",\"$filmPremiereDate\",\"$filmLength\",\"$filmCategory\",\"$filmCountry\")";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry]);
     $film= $stmt->fetchAll();
  }


  protected function updateFilmStmt($id_film, $filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry){
    $sql = "UPDATE `film` SET `title`='$filmTitle', `premiere_date`='$filmPremiereDate', `length`='$filmLength', `id_category`='$filmCategory',`id_country`='$filmCountry' WHERE `id_film`='$id_film'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film, $filmTitle, $filmPremiereDate, $filmLength, $filmCategory, $filmCountry]);
    $film= $stmt->fetchAll();
  }


  protected function deleteFilmStmt($id_film){
    $sql = "DELETE FROM `film` WHERE `id_film`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film]);
    $id = $stmt->fetchAll();

    return $id;
  }
 }

 ?>
