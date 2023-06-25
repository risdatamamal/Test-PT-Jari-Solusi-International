<?php
class Person
{
  public $code;
  public $name;
  public $parent;

  public function __construct($code, $name, $parent)
  {
    $this->code = $code;
    $this->name = $name;
    $this->parent = $parent;
  }
}

$listPersons = [
  new Person("A001", "Wati", ""),
  new Person("A002", "Wira", "A001"),
  new Person("A003", "Andi", "A002"),
  new Person("A004", "Bagus", "A002"),
  new Person("A005", "Siti", "A001"),
  new Person("A006", "Hasan", "A005"),
  new Person("A007", "Abdul", "A006"),
];
