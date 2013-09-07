<?php
namespace PHPNE\Entity;

use Twig_Environment as Twig;

abstract class AbstractWriter
{
    protected
        $twig,
        $save_dir;

    public function __construct(Twig $twig, $save_dir)
    {
        $this->twig     = $twig;
        $this->save_dir = $save_dir;
    }
}
