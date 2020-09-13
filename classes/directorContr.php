<?php

class DirectorContr extends Director {

  public function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  public function createDirectorStmt($directorName,$directorLastname,$directorAge,$directorBirthDate,$directorCountry){
    $directorNameChecked = $this->test_input($directorName);
    $directorLastnameChecked = $this->test_input($directorLastname);
    $directorAgeChecked = $this->test_input($directorAge);
    $directorBirthDateChecked = $this->test_input($directorBirthDate);
    $directorCountryChecked = $this->test_input($directorCountry);
    $this->setDirectorStmt($directorNameChecked,$directorLastnameChecked,$directorAgeChecked,$directorBirthDateChecked,$directorCountryChecked);
  }

  public function delDirectorStmt($id_director){
    $this->deleteDirectorStmt($id_director);
  }

  public function upDirectorStmt($id_director,$directorName,$directorLastname,$directorAge,$directorBirthDate,$directorCountry){
    $directorNameChecked = $this->test_input($directorName);
    $directorLastnameChecked = $this->test_input($directorLastname);
    $directorAgeChecked = $this->test_input($directorAge);
    $directorBirthDateChecked = $this->test_input($directorBirthDate);
    $directorCountryChecked = $this->test_input($directorCountry);
    $this->updateDirectorStmt($id_directorChecked,$directorNameChecked,$directorLastnameChecked,$directorAgeChecked,$directorBirthDateChecked,$directorCountryChecked);
  }

}

?>
