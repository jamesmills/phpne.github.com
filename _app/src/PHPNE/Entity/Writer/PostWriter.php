<?php
namespace PHPNE\Entity\Writer;

class PostWriter extends AbstractWriter
{
    public function write($post, $content)
    {
        $file = strtr($post->getFilename(), array('.md' => '.html'));
        $path = sprintf('%s/%s', $this->basedir, $file);

        return file_put_contents($path, $content);
    }
}
