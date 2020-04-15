<?php


namespace BMINCONTENTOBJECT\BminContentObject\ContentObject;

use TYPO3\CMS\Frontend\ContentObject\AbstractContentObject;

class JavaScriptContentObject extends AbstractContentObject
{


    public function render($conf = [])
    {
        if (!is_array($conf)) {
            return '';
        }
        $content = '';
        if (isset($conf['value'])) {
            $content = $conf['value'];
            unset($conf['value']);
        }
//        if (isset($conf['value.'])) {
//            $content = $this->cObj->stdWrap($content, $conf['value.']);
//            unset($conf['value.']);
//        }
//        if (!empty($conf)) {
//            $content = $this->cObj->stdWrap($content, $conf);
//        }
        return '<script type="text/javascript">' . $content . "</script>";
    }
}
