<?php
namespace PHPNE\Entity\Writer;

class PageWriter extends AbstractWriter
{
    public function write($page, $content)
    {
        $path = sprintf('%s/%s', $this->basedir, $page->getFilename());

        return file_put_contents($path, $content);
    }
}
