<?php

class UserView extends User {

  public function showEditModeStmt($userLogin,$userPassword){
    $result = $this->getUserPasswordStmt($userLogin);

    if(password_verify($userPassword,$result[0]['password'])){
      return true;
    }
  }

  public function showUserStmt($userLogin){
    $results = $this->getUserStmt($userLogin);

    foreach ($results as $result) {
      $myJSON = json_encode($result);
      echo $myJSON;
      header("Content-Type: application/json; charset=UTF-8");
    }
  }
}
?>
