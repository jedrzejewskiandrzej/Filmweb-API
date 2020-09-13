<?php

class ActorContr extends Actor {

  public function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  public function createActorStmt($actorName,$actorLastname,$actorAge,$actorBirthDate,$actorCountry){
    $actorNameChecked = $this->test_input($actorName);
    $actorLastnameChecked = $this->test_input($actorLastname);
    $actorAgeChecked = $this->test_input($actorAge);
    $actorBirthDateChecked = $this->test_input($actorBirthDate);
    $actorCountryChecked = $this->test_input($actorCountry);
    $this->setActorStmt($actorNameChecked,$actorLastnameChecked,$actorAgeChecked,$actorBirthDateChecked,$actorCountryChecked);
  }

  public function delActorStmt($id_actor){
    $this->deleteActorStmt($id_actor);
  }

  public function upActorStmt($id_actor,$actorName,$actorLastname,$actorAge,$actorBirthDate,$actorCountry){
    $actorNameChecked = $this->test_input($actorName);
    $actorLastnameChecked = $this->test_input($actorLastname);
    $actorAgeChecked = $this->test_input($actorAge);
    $actorBirthDateChecked = $this->test_input($actorBirthDate);
    $actorCountryChecked = $this->test_input($actorCountry);
    $this->updateActorStmt($id_actor,$actorNameChecked,$actorLastnameChecked,$actorAgeChecked,$actorBirthDateChecked,$actorCountryChecked);
  }

}
