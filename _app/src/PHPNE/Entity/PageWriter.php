<?php
namespace PHPNE\Entity;

class PageWriter extends AbstractWriter
{
    public function write(array $params = array())
    {
        $data   = $this->twig->render($params['page']->getName(), $params);
        $file   = sprintf('%s/%s', $this->getSavePath(), $params['page']->getName());

        return file_put_contents($file, $data);
    }
}
