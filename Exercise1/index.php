<?php

class Affichage{
    public $message;
    public function Message()
    {
        return $this->message;
    }
}
  $affichage= new Affichage();
  echo 'MyClass class has initialized !';
?>