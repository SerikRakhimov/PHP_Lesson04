<!doctype html>
<?php
include "helpers.php";

$meta = tag('meta', ['charset' => 'UTF-8']);
$title = tag('title', [], 'Title');

$head = tag('head', [], $meta . $title);
$body = tag('body', [], 'Hello, world!');

echo tag('html',['lang'=>'en'], $head . $body);
