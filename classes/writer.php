<?php

class Writer extends Dbh{

  protected function getWriters(){
    $sql="SELECT * FROM `writer`";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getWriterStmt($id_writer){
     $sql="SELECT * FROM `writer` WHERE `id_writer`=?";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$id_writer]);
     $id = $stmt->fetchAll();

     return $id;
  }

  protected function setWriterStmt($writerNameChecked,$writerLastnameChecked,$writerAgeChecked,$writerBirthDateChecked,$writerCountryChecked){
     $sql="INSERT INTO `writer`(`id_writer`, `name`, `lastname`, `age`, `birth_date`, `id_country`) VALUES (NULL,'$writerNameChecked','$writerLastnameChecked','$writerAgeChecked','$writerBirthDateChecked','$writerCountryChecked')";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$writerNameChecked,$writerLastnameChecked,$writerAgeChecked,$writerBirthDateChecked,$writerCountryChecked]);
     $writer= $stmt->fetchAll();
  }


  protected function updateWriterStmt($id_writer,$writerNameChecked,$writerLastnameChecked,$writerAgeChecked,$writerBirthDateChecked,$writerCountryChecked){
    $sql = "UPDATE `writer` SET `name`='$writerNameChecked', `lastname`='$writerLastnameChecked', `age`='$writerAgeChecked', `id_country`='$writerCountryChecked',`birth_date`='$writerBirthDateChecked' WHERE `id_writer`='$id_writer'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_writer,$writerNameChecked,$writerLastnameChecked,$writerAgeChecked,$writerBirthDateChecked,$writerCountryChecked]);
    $writer= $stmt->fetchAll();
  }


  protected function deleteWriterStmt($id_writer){
    $sql = "DELETE FROM `writer` WHERE `id_writer`=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_writer]);
    $id = $stmt->fetchAll();

    return $id;
  }
 }

 ?>
