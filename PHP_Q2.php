<?php

// recursive function
function reverse($string)
{
   if (strlen($string) <= 1) {
      return $string;
   } else {
      return reverse(substr($string, 1)) . $string[0];
   }
}

echo reverse("hello") . "<br>" . reverse("world") . "<br>" . reverse("a") . "<br>" . reverse("");
