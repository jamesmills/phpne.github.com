<?php
namespace PHPNE\Entity\Repository;

use PHPNE\Entity\Post;

class PostRepository extends AbstractRepository
{
    public function all()
    {
        $posts = array();

        $files = $this->files()
            ->name('*.md')
            ->in('/');

        foreach ($files as $file) {
            $posts[] = $this->build($file);
        }

        return $posts;
    }

    private function build($file)
    {
        return new Post($file);
    }
}
