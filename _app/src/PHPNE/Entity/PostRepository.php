<?php
namespace PHPNE\Entity;

class PostRepository extends AbstractRepository
{
    public function all()
    {
        return $this->files()
            ->name('*.md')
            ->in('/');
    }
}
