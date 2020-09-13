<?php

class WriterContr extends Writer {

  public function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  public function createWriterStmt($writerName,$writerLastname,$writerAge,$writerBirthDate,$writerCountry){
    $writerNameChecked = $this->test_input($writerName);
    $writerLastnameChecked = $this->test_input($writerLastname);
    $writerAgeChecked = $this->test_input($writerAge);
    $writerBirthDateChecked = $this->test_input($writerBirthDate);
    $writerCountryChecked = $this->test_input($writerCountry);
    $this->setWriterStmt($writerNameChecked,$writerLastnameChecked,$writerAgeChecked,$writerBirthDateChecked,$writerCountryChecked);
  }

  public function delWriterStmt($id_writer){
    $this->deleteWriterStmt($id_writer);
  }

  public function upWriterStmt($id_writer,$writerName,$writerLastname,$writerAge,$writerBirthDate,$writerCountry){
    $writerNameChecked = $this->test_input($writerName);
    $writerLastnameChecked = $this->test_input($writerLastname);
    $writerAgeChecked = $this->test_input($writerAge);
    $writerBirthDateChecked = $this->test_input($writerBirthDate);
    $writerCountryChecked = $this->test_input($writerCountry);
    $this->updateWriterStmt($id_writer,$writerNameChecked,$writerLastnameChecked,$writerAgeChecked,$writerBirthDateChecked,$writerCountryChecked);
  }



}
