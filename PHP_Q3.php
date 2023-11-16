<?php
define('CHARACTERS', "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
define('DIGITS', "0123456789");

function countAll($string)
{
   $result = array(
      "LETTERS" => 0,
      "DIGITS" => 0
   );

   for ($n = 0; $n < strlen($string); $n++) {
      if (strpos(CHARACTERS, $string[$n]) !== false) {
         $result["LETTERS"]++;
      } else if (strpos(DIGITS, $string[$n]) !== false) {
         $result["DIGITS"]++;
      }
   }

   return $result;
}

echo "<pre>";
echo print_r(countAll("Hello World 123"));
