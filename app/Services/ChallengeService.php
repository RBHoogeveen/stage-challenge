<?php

namespace App\Services;

class ChallengeService
{
  public function getTotalScoreOfNames()
  {
    $names = collect(['Arne', 'Reinier', 'Kylian', 'Huub', 'Mick', 'Brenda', 'Ruben', 'Desley', 'Carly', 'Esther']);

    $this->sortArray($names);

    $totalScore = 0;
    
    foreach($names as $name) {
      $score = $this->getNumericValueOfString($name) * $names->search($name);
      $totalScore = $totalScore + $score;
    }
    
    return $totalScore;
  }

  public function getNumericValueOfString($string)
  {
    $alphabet = range('A', 'Z');

    $name = strtoupper($string);

    $chars = str_split($name);

    $stringValue = 0;

    foreach($chars as $char) {
      $stringValue = $stringValue + (array_search($char, $alphabet) + 1);
    }

    return $stringValue;
  }

  public function sortArray($array)
  {
    return $array->sort();
  }
}