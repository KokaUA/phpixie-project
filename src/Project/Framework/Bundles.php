<?php

namespace Project\Framework;

class Bundles extends \PHPixie\BundleFramework\Bundles
{
    protected function buildBundles()
    {
        return array(
            new \Project\App($this->builder),
            new \Admin\App($this->builder),
            new \Koka\Bootstrap3Bundle\App($this->builder)
        );
    }
    
    protected function getRootFolder()
    {
        return realpath(__DIR__.'/../../');
    }
}