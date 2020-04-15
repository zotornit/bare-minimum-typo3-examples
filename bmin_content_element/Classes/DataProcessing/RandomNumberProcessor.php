<?php


namespace BMINCONTENTELEMENT\BminContentElement\DataProcessing;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class RandomNumberProcessor implements DataProcessorInterface {

    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        $processedData['processed']['random_number'] = mt_rand(1, 100);

        return $processedData;
    }
}
