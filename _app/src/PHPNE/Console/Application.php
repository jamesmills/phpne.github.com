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

    public function __construct($name = self::NAME, $version = self::VERSION)
    {
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

    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    public function getTwig()
    {
        return $this->container['twig'];
    }

    public function getFinder()
    {
        return $this->container['finder'];
    }
}
