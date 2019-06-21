<?php

//declare(encoding='UTF-8');
defined("FILENAME") || define("FILENAME", "input.txt");
//declare(encoding='UTF-8');

$input = file_get_contents(FILENAME);

$input_paragraphs = explode("\r\n", $input);

//$char_array = str_split($input);

//$output = filter_var($input, FILTER_SANITIZE_STRING | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_BACKTICK);
//$output = preg_replace("/[^A-Za-z0-9?! ]/","",$input);

foreach($input_paragraphs as $value)
{
    $output = preg_replace("/[^A-Za-z]/", "  ", $value);
    print($output);
    print("<br>");
}