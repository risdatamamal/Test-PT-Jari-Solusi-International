<?php
function findLongestSubstring($str)
{
  $maxLength = 0;
  $currentSubstring = "";
  $n = strlen($str);

  for ($i = 0; $i < $n; $i++) {
    $char = $str[$i];
    $pos = strpos($currentSubstring, $char);

    if ($pos !== false) {
      $maxLength = max($maxLength, strlen($currentSubstring));
      $currentSubstring = substr($currentSubstring, $pos + 1);
    }

    // menambahkan karakter ke substring saat ini
    $currentSubstring .= $char;
  }

  // cek panjang maksimum lagi setelah perulangan selesai
  $maxLength = max($maxLength, strlen($currentSubstring));

  return $maxLength;
}

echo "Input: " . "\n";
$input = trim(fgets(STDIN));
$output = findLongestSubstring($input);

echo "Output: " . "\n";
echo $output . "\n";

echo "Penjelasan: " . "\n";
$currentSubstring = substr($input, 0, $output);
echo "Substring terpanjang adalah ". $currentSubstring ." dengan panjang " . $output . "\n";
