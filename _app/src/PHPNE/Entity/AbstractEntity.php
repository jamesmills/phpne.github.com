<?php
namespace PHPNE\Entity;

use Symfony\Component\Finder\SplFileInfo;

abstract class AbstractEntity
{
    protected
        $file;

    public function __construct(SplFileInfo $file)
    {
        $this->file = $file;
    }

    public function getFilename()
    {
        return $this->file->getFilename();
    }
}
