<?php

namespace nadar\creative;

use luya\web\Asset;

class CreativeThemeAsset extends Asset
{
    public function init()
    {
        parent::init();

        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'resources';
    }

    public $css = [
        'css/creative.min.css',
    ];
}