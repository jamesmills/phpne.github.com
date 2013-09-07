<?php
namespace PHPNE\Entity;

use Symfony\Component\Finder\Finder;

abstract class AbstractRepository extends Finder
{
    private
        $basedir;

    public function __construct($basedir)
    {
        parent::__construct();

        $this->basedir = $basedir;
    }

    public function in($dirs)
    {
        if ( ! is_array($dirs)) {
            $dirs = array($dirs);
        }

        $basedir = $this->basedir;

        array_walk($dirs, function(& $dir) use ($basedir) {
            $dir = $basedir . $dir;
        });

        return parent::in($dirs);
    }
}
