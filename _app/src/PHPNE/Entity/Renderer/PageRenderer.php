<?php
namespace PHPNE\Entity\Renderer;

use PHPNE\Entity\Page;

class PageRenderer extends AbstractRenderer
{
    public function render(Page $page, array $params = array())
    {
        return $this->twig->render($page->getFilename(), $params);
    }
}
