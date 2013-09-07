<?php
namespace PHPNE\Entity;

class PageRepository extends AbstractRepository
{
    public function all()
    {
        return $this->files()
            ->depth(0)
            ->name('*.html')
            ->in('/');
    }
}
