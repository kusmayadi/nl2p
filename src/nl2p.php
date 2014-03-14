<?php

if ( ! function_exists('nl2p'))
{
  function nl2p($text)
  {
    $text = preg_replace('/\n[\s]+/', "</p>\n<p>", $text);
    $text = '<p>'.$text.'</p>';
    return $text;
  }
}
