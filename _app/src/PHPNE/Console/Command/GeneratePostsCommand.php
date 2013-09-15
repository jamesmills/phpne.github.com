<?php
namespace PHPNE\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GeneratePostsCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('generate:posts')
            ->setDescription('Generates the `posts` static content based on the current templates')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $pages      = $this->pages();
        $posts      = $this->posts();

        $renderer   = $this->services()->get('post.renderer');
        $writer     = $this->services()->get('post.writer');

        foreach ($posts as $post) {
            $content = $renderer->render($post, array(
                'post'  => $post,
                'pages' => $pages,
                'posts' => $posts,
            ));
            $writer->write($post, $content);
        }
    }
}
