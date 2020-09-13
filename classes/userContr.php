<?php

class UserContr extends User {

  public function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  public function createUserStmt($userLogin, $userName, $userLastname, $userBirthDate, $userSex, $userEmail, $userPassword){
    $userLoginChecked= $this->test_input($userLogin);
    $userNameChecked= $this->test_input($userName);
    $userBirthDateChecked= $this->test_input($userBirthDate);
    $userSexChecked= $this->test_input($userSex);
    $userEmailChecked= $this->test_input($userEmail);
    $userPasswordChecked= $this->test_input($userPassword);

    $hashedPassword = password_hash($userPasswordChecked,PASSWORD_DEFAULT);
    $this->setUserStmt($userLoginChecked, $userNameChecked, $userLastnameChecked, $userBirthDateChecked, $userSexChecked, $userEmailChecked, $hashedPassword);
  }

  public function createUserRaingStmt($id_film,$id_user,$rating){
    $this->setUserRatingStmt($id_film,$id_user,$rating);
  }

  public function upUserRaingStmt($id_film,$id_user,$rating){
    $this->updateUserRatingStmt($id_film,$id_user,$rating);
  }

}
