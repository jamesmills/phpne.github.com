<?php
namespace PHPNE\Entity;

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
        $page = new Page;
        $page->setName($file->getFilename());

        return $page;
    }
}
