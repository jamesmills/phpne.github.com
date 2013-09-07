<?php
namespace PHPNE\Entity;

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
        $post = new Post;
        $name = substr($file->getFilename(), 0, -3) . '.html';
        $post->setName($name);
        $post->setContent($file->getContents());

        return $post;
    }
}
