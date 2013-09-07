<?php
namespace PHPNE\Entity;

use Twig_Environment as Twig;

abstract class AbstractWriter
{
    protected
        $twig,
        $save_path;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    public function setSavePath($path)
    {
        $this->save_path = $path;

        return $this;
    }

    public function getSavePath()
    {
        return $this->save_path;
    }
}
