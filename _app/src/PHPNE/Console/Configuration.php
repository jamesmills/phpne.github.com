<?php
namespace PHPNE\Console;

use ArrayObject;

class Configuration extends ArrayObject
{
    public function __construct(array $array = array())
    {
        parent::__construct($array);
    }

    public function get($key)
    {
        if ( ! $this->has($key)) {
            return;
        }

        return $this->offsetGet($key);
    }

    public function set($key, $value)
    {
        $this->offsetSet($key, $value);

        return $this;
    }

    public function has($key)
    {
        return $this->offsetExists($key);
    }
}
