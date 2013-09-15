<?php
namespace PHPNE\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GeneratePagesCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('generate:pages')
            ->setDescription('Generates the `pages` static content based on the current templates')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $pages      = $this->pages();
        $posts      = $this->posts();

        $renderer   = $this->services()->get('page.renderer');
        $writer     = $this->services()->get('page.writer');

        foreach ($pages as $page) {
            $content = $renderer->render($page, array(
                'page'  => $page,
                'pages' => $pages,
                'posts' => $posts,
            ));
            $writer->write($page, $content);
        }
    }
}
