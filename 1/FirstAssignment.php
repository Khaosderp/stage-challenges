<?php

//declare(encoding='UTF-8');
defined("FILENAME") || define("FILENAME", "input.txt");
//declare(encoding='UTF-8');

$input = file_get_contents(FILENAME);

$input_paragraphs = explode("\r\n", $input);

foreach($input_paragraphs as $value)
{
    $output = preg_replace("/[^A-Za-z]/", "  ", $value);
    print($output);
    print("<br>");
}