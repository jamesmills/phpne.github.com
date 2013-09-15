# Introduction

The phpne.org.uk website is powered by Github pages which, at present, only serves static content.

I thought this would be a fun project to use PHP for, as opposed to Jekyll, so here we are.

This application (powered by [Twig][1], [Console][2], [Finder][3], [Pimple][4], and [Markdown][5]) will generate  the static HTML files based on the Twig and Markdown templates located in the [views/pages][6] and [views/pages/posts][7] folders.

## Installation

phpne.github.com uses [Composer][8] to install its dependencies, so these must be installed first.

    $ composer install

## Usage

If you have PHP locally installed and available, you can see what commands by execting the console program located in the bin folder.

    $ php bin/console

## Contributing

1. Fork phpne/phpne.github.com
2. Create a feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to your feature branch (`git push origin my-new-feature`)
5. Create new Pull Request

[1]: http://twig.sensiolabs.org/
[2]: http://symfony.com/doc/current/components/console/introduction.html
[3]: http://symfony.com/doc/current/components/finder.html
[4]: http://pimple.sensiolabs.org/
[5]: http://daringfireball.net/projects/markdown/
[6]: /views/pages/
[7]: /views/pages/posts/
[8]: http://getcomposer.org/