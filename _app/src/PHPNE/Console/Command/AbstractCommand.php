<?php
namespace PHPNE\Console\Command;

use Symfony\Component\Console\Command\Command;

abstract class AbstractCommand extends Command
{
    protected function services()
    {
        return $this->getApplication()->getContainer();
    }

    protected function pages()
    {
        return $this->services()->get('page.repository')->all();
    }

    protected function posts()
    {
        return $this->services()->get('post.repository')->all();
    }
}
