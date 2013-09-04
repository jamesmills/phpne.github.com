<?php
namespace PHPNE\Console;

class Configuration
{
    protected
        $storage = array();

    public function __construct($array = array())
    {
        $this->storage = $array;
    }

    public function get($key)
    {
        if ( ! $this->has($key)) {
            return;
        }

        return $this->storage[ $key ];
    }

    public function set($key, $value)
    {
        $this->storage[ $key ] = $value;

        return $this;
    }

    public function has($key)
    {
        return isset($this->storage[ $key ]);
    }
}
