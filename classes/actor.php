<?php

class Actor extends Dbh{

  protected function getActors(){
    $sql="SELECT * FROM `actor`";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getActorStmt($id_actor){
     $sql="SELECT * FROM `actor` WHERE `id_actor`=?";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_actor]);
     $id = $stmt->fetchAll();

     return $id;
  }
//set parameteres
  protected function setActorStmt($actorNameChecked,$actorLastnameChecked,$actorAgeChecked,$actorBirthDateChecked,$actorCountryChecked){
     $sql="INSERT INTO `actor`(`id_actor`, `name`, `lastname`, `age`, `birth_date`, `id_country`) VALUES (NULL,'$actorNameChecked','$actorLastnameChecked','$actorAgeChecked','$actorBirthDateChecked','$actorCountryChecked')";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$actorNameChecked,$actorLastnameChecked,$actorAgeChecked,$actorBirthDateChecked,$actorCountryChecked]);
     $actor= $stmt->fetchAll();
  }


  protected function updateActorStmt($id_actor,$actorNameChecked,$actorLastnameChecked,$actorAgeChecked,$actorBirthDateChecked,$actorCountryChecked){
    $sql = "UPDATE `actor` SET `name`='$actorNameChecked', `lastname`='$actorLastnameChecked', `age`='$actorAgeChecked', `id_country`='$actorCountryChecked',`birth_date`='$actorBirthDateChecked' WHERE `id_actor`='$id_actor'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_actor,$actorNameChecked,$actorLastnameChecked,$actorAgeChecked,$actorBirthDateChecked,$actorCountryChecked]);
    $actor= $stmt->fetchAll();
  }


  protected function deleteActorStmt($id_actor){
    $sql = "DELETE FROM `actor` WHERE `id_actor`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_actor]);
    $id = $stmt->fetchAll();

    return $id;
  }
 }

 ?>
