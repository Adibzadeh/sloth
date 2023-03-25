<?php

class Form {
  protected $name = '';
  protected $httpMethod = '';
  protected $hasFile = false; 
  protected $class= '';

  public function __construct($formName, $httpMethod = 'GET', $hasFile = false)
  {
    $this->name = $formName;
    $this->httpMethod = $httpMethod;

    if($hasFile)
      $this->hasFile = true;
  }

  public function open()
  {
    echo "<form action='' method='{$this->httpMethod}' class='{$this->class}'>";
  }

  public function close()
  {
    echo '</form>';
  }

  public function submit($value)
  {
    echo "<input type='submit' value='{$value}' />";
  }
}
