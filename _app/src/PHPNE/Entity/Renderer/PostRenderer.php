<?php
namespace PHPNE\Entity\Renderer;

use PHPNE\Entity\Post;

class PostRenderer extends AbstractRenderer
{
    public function render(Post $post, array $params = array())
    {
        return $this->twig->render('layouts/post.html', $params);
    }
}
