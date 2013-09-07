<?php
namespace PHPNE\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('phpne:generate')
            ->setDescription('Generates the static files based on the current templates')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container  = $this->getApplication()->getContainer();

        $pages      = $container['page.repository']->all();
        $posts      = $container['post.repository']->all();

        foreach ($pages as $page) {
            $container['page.writer']->write(array(
                'page'  => $page,
                'pages' => $pages,
                'posts' => $posts,
            ));
        }

        foreach ($posts as $post) {
            $container['post.writer']->write(array(
                'post'  => $post,
                'pages' => $pages,
                'posts' => $posts,
            ));
        }
    }
}
