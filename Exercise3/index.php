<?php

 class TableauSort
 {
 public $tableau;

  public function __construct(array $table)
  {
      $this->tableau = $table;
  }
    public function trieTableau()
    {
      $content = $this->tableau;
      sort($content);
      return $content;

    }
    
 }
 $sortarray = new TableauSort(array(11, -2, 4, 35, 0, 8, -9));
    print_r($sortarray->trieTableau())."\n";

?>