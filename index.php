<?php

include __DIR__ . '/vendor/autoload.php';

$path = 'question.md';
$collection = \App\QuestionList::fromMdFile($path);
dd($collection);

