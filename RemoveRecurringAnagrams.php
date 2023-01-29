<?

function removeAnagrams(array $words) {
  $result = [];
  $prev = [];
  
  foreach ($words as $word) {
    $count = count_chars($word, 1);
    
    if (!in_array($count, $prev)) {
      $result[] = $word;
      $prev[] = $count;
    }
  }
  
  sort($result);
  
  return $result;
}
