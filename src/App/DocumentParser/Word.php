<?php

namespace App\DocumentParser;

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

class Word {
    function getFileAsObjectFromPath(string $pathToDocument): PhpWord {
        return IOFactory::load($pathToDocument);
    }
}





