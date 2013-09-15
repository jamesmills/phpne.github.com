<?php
namespace PHPNE\Console;

use Pimple;

class Container extends Pimple
{
    public function get($service)
    {
        if ( ! $this->has($service)) {
            return;
        }

        return $this->offsetGet($service);
    }

    public function set($service, $provider)
    {
        $this->offsetSet($service, $provider);

        return $this;
    }

    public function has($service)
    {
        return $this->offsetExists($service);
    }
}
