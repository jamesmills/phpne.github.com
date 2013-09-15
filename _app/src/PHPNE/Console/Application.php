<?php
namespace PHPNE\Console;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    const
        NAME    = 'PHPNE Console Application',
        VERSION = '0.1.0';

    protected
        $container;

    public function __construct(Container $container, $name = self::NAME, $version = self::VERSION)
    {
        $this->setContainer($container);
        parent::__construct($name, $version);
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function setContainer(Container $container)
    {
        $this->container = $container;

        return $this;
    }
}
