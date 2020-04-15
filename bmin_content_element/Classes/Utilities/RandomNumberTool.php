<?php


namespace BMINCONTENTELEMENT\BminContentElement\Utilities;

class RandomNumberTool
{

    public function getRandomNumber(string $content, array $conf): string
    {
        return mt_rand(1000, 2000);
    }
}
