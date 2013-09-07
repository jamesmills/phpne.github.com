<?php
namespace PHPNE\Entity;

class PostWriter extends AbstractWriter
{
    public function write(array $params = array())
    {
        $data   = $this->twig->render('layouts/post.html', $params);
        $file   = sprintf('%s/%s', $this->getSavePath(), $params['post']->getName());

        return file_put_contents($file, $data);
    }
}
