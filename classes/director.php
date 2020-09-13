<?php

class Director extends Dbh{

  protected function getDirectors(){
    $sql="SELECT * FROM `director`";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getDirectorStmt($id_director){
     $sql="SELECT * FROM `director` WHERE `id_director`=?";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_director]);
     $id = $stmt->fetchAll();

     return $id;
  }

  protected function setDirectorStmt($directorNameChecked,$directorLastnameChecked,$directorAgeChecked,$directorBirthDateChecked,$directorCountryChecked){
     $sql="INSERT INTO `director`(`id_director`, `name`, `lastname`, `age`, `birth_date`, `id_country`) VALUES (NULL,'$directorName','$directorLastname','$directorAge','$directorBirthDate','$directorCountry')";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$directorNameChecked,$directorLastnameChecked,$directorAgeChecked,$directorBirthDateChecked,$directorCountryChecked]);
     $director= $stmt->fetchAll();
  }


  protected function updateDirectorStmt($id_directorChecked,$directorNameChecked,$directorLastnameChecked,$directorAgeChecked,$directorBirthDateChecked,$directorCountryChecked){
    $sql = "UPDATE `director` SET `name`='$directorName', `lastname`='$directorLastname', `age`='$directorAge', `id_country`='$directorCountry',`birth_date`='$directorBirthDate' WHERE `id_director`='$id_director'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_directorChecked,$directorNameChecked,$directorLastnameChecked,$directorAgeChecked,$directorBirthDateChecked,$directorCountryChecked]);
    $director= $stmt->fetchAll();
  }


  protected function deleteDirectorStmt($id_director){
    $sql = "DELETE FROM `director` WHERE `id_director`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_director]);
    $id = $stmt->fetchAll();

    return $id;
  }
 }

 ?>
