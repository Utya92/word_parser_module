<?php
require 'src/init.php';

use App\DocumentParser\CountService;
use App\DocumentParser\Word;


$word = (new Word())->getFileAsObjectFromPath("upload/word.docx");

$countService = new CountService($word);

$count = $countService->getCountNumberCharacters();
debug($count);

