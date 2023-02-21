<?php

namespace App\DocumentParser;

class CountService {
    private \PhpOffice\PhpWord\PhpWord $__word;

    public function __construct(\PhpOffice\PhpWord\PhpWord $word) {
        $this->__word = $word;
    }

    public function getCountNumberCharacters(): int {
        $str = '';
        foreach ($this->__word->getSections() as $section) {
            $arrays = $section->getElements();
            foreach ($arrays as $e) {
                if (get_class($e) === "PhpOffice\PhpWord\Element\TextRun") {
                    foreach ($e->getElements() as $text)
                        if (get_class($text) != "PhpOffice\PhpWord\Element\TextBreak") {
                            $str .= $text->getText();
                        }
                }
            }
            break;
        }
        return (strlen($str));
    }
}

