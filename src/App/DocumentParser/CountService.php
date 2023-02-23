<?php

namespace App\DocumentParser;

use PhpOffice\PhpWord\PhpWord;

class CountService {
    private PhpWord $__word;

    public function __construct(PhpWord $word) {
        $this->__word = $word;
    }

    public function getCountNumberCharacters(): int {
        $str = '';
        foreach ($this->__word->getSections() as $section) {
            $arrays = $section->getElements();
            foreach ($arrays as $e) {
                $allClass = get_class($e);
                if (method_exists($allClass, "getElements")) {
                    $classWithElem = $e->getElements();
                    foreach ($classWithElem as $item) {
                        if (method_exists($item, "getText"))
                            $str .= $item->getText();
                    }
                }
            }
        }
        return (strlen($str));
    }
}

