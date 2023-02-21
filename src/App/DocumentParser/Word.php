<?php

namespace App\DocumentParser;

use PhpOffice\PhpWord\IOFactory;

class Word {
    function getFileAsObjectFromPath(string $pathToDocument): \PhpOffice\PhpWord\PhpWord {
        return IOFactory::load($pathToDocument);
    }

}





