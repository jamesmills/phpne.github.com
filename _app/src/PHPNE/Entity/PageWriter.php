<?php
namespace PHPNE\Entity;

class PageWriter extends AbstractWriter
{
    public function write(array $params = array())
    {
        $data   = $this->twig->render($params['page']->getFilename(), $params);
        $file   = sprintf('%s/%s', $this->save_dir, $params['page']->getFilename());
        
        return file_put_contents($file, $data);
    }
}
