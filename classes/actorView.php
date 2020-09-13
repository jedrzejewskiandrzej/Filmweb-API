<?php

class ActorView extends Actor {

  public function showActors(){
    $results = $this->getActors();

    foreach ($results as $result) {
      $myJSON = json_encode($result);
      header("Content-Type: application/json; charset=UTF-8");
      echo $myJSON;
    }
  }

  public function showActorStmt($id_actor){
    $result = $this->getActorStmt($id_actor);
    $myJSON = json_encode($result);
    header("Content-Type: application/json; charset=UTF-8");
    echo $myJSON;
  }

}
