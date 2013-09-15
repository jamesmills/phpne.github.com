<?php
namespace PHPNE\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateAllCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('generate:all')
            ->setDescription('Generates the `posts` and `pages` static content based on the current templates')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        foreach (array('pages', 'posts') as $entity) {
            $command = $this->getApplication()->find("generate:$entity");
            $command->run($input, $output);
        }
    }
}
