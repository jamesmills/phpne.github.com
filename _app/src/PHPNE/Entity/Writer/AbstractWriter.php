<?php
namespace PHPNE\Entity\Writer;

abstract class AbstractWriter
{
    protected
        $basedir;

    public function __construct($basedir)
    {
        $this->basedir = $basedir;
    }
}
