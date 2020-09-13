<?php

class User extends Dbh{

  protected function getUserStmt($userLogin){

    $sql="SELECT * FROM `user` WHERE `login`=$userLogin";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userLogin]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setUserStmt($userLoginChecked, $userNameChecked, $userLastnameChecked, $userBirthDateChecked, $userSexChecked, $userEmailChecked, $hashedPassword){
    $sql = "INSERT INTO `user`(`id_user`, `login`, `name`, `lastname`, `birth_date`, `sex`, `email`, `password`) VALUES (NULL,'$userLoginChecked', '$userNameChecked', '$userLastnameChecked', '$userBirthDateChecked', '$userSexChecked', '$userEmailChecked', '$hashedPassword')";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userLoginChecked, $userNameChecked, $userLastnameChecked, $userBirthDateChecked, $userSexChecked, $userEmailChecked, $hashedPassword]);
    $film= $stmt->fetchAll();
  }

  protected function setUserRatingStmt($id_film,$id_user,$rating){
    $sql = "INSERT INTO `user_rating`(`id_film`, `id_user`, `rating`) VALUES ('$id_film','$id_user','$rating')";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film,$id_user,$rating]);
    $film= $stmt->fetchAll();
  }

  protected function updateUserRatingStmt($id_film,$id_user,$rating){
    $sql = "UPDATE `user_rating` SET `id_film`='$id_film', `id_user`='$id_user', `rating`='$rating'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_film,$id_user,$rating]);
    $writer= $stmt->fetchAll();
  }

  protected function getUserPasswordStmt($userLogin){
     $sql="SELECT `password` FROM `user` WHERE `login`=?";
     $stmt = $this->connect()->prepare($sql);
     $stmt->execute([$userLogin]);
     $password = $stmt->fetchAll();

     return $password;
  }
 }

 ?>
