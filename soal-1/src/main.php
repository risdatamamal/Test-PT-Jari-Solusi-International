<?php
require_once __DIR__ . "/person.php";

echo "Input: " . "\n";
$parent = trim(fgets(STDIN));
echo "\n";

$filteredPersons = getDescendantsByParent($parent, $listPersons);

function getDescendantsByParent($parent, $listPersons)
{
  $result = [];

  foreach ($listPersons as $person) {
    if ($person->parent === $parent) {
      $result[] = $person;
      $result = array_merge($result, getDescendantsByParent($person->code, $listPersons));
    }
  }

  return $result;
}

echo "Output: " . "\n";
foreach ($filteredPersons as $person) {
  echo $person->name . "\n";
}
echo "\n";
