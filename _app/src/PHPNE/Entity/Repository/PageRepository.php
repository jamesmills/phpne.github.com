<?php
namespace PHPNE\Entity\Repository;

use PHPNE\Entity\Page;

class PageRepository extends AbstractRepository
{
    public function all()
    {
        $pages = array();

        $files = $this->files()
            ->depth(0)
            ->name('*.html')
            ->in('/');

        foreach ($files as $file) {
            $pages[] = $this->build($file);
        }

        return $pages;
    }

    private function build($file)
    {
        return new Page($file);
    }
}
