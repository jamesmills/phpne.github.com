<?php
namespace PHPNE\Entity;

class Post extends AbstractEntity
{
    public function getContent()
    {
        return $this->file->getContents();
    }
}
