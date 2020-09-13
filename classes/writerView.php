<?php

class WriterView extends Writer {

  public function showWriters(){
    $results = $this->getWriters();

    foreach ($results as $result) {
      $myJSON = json_encode($result);
      header("Content-Type: application/json; charset=UTF-8");
      echo $myJSON;
    }
  }

  public function showWriterStmt($id_writer){
    $result = $this->getWriterStmt($id_writer);
    $myJSON = json_encode($result);
    header("Content-Type: application/json; charset=UTF-8");
    echo $myJSON;
  }

}
