<?php
namespace PHPNE\Entity\Renderer;

use Twig_Environment as Twig;

abstract class AbstractRenderer
{
    protected
        $twig;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }
}
