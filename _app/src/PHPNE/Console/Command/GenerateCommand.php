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
        $configuration  = $this->getApplication()->getConfiguration();
        $twig           = $this->getApplication()->getTwig();
        $finder         = $this->getApplication()->getFinder();

        foreach ($finder->in($configuration->get('web.dir')) as $file) {

            $contents   = $twig->render($file->getRelativePathname());
            $dir        = sprintf('%s/%s', $configuration->get('pub.dir'), $file->getRelativePath());
            $path       = sprintf('%s/%s', $dir, $file->getFilename());

            if ( ! is_dir($dir)) {
                mkdir($dir, 0777, true);
            }

            file_put_contents($path, $contents);
        }
    }
}
