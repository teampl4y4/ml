ML
========================

We can use this document to easily communicate needs for setting up dev environments and 'gotchas'

1) Installing
----------------------------------

Make sure you run the following two commands once you download from GIT to get FOSUserBundle:
    1) $ composer require friendsofsymfony/user-bundle:2.0.*@dev
    2) $ composer update friendsofsymfony/user-bundle

Note: you may need to run $ composer or $ php composer.phar depending on how you set up and configured your composer.

If you are running MAMP, then there will be issues with this, and you should read this article on how to set up composer, etc:
    1) http://www.lullabot.com/blog/article/installing-php-pear-and-pecl-extensions-mamp-mac-os-x-107-lion


2) Setting Up Data
----------------------------------
    1) You can navigate to /app_dev.php and click register to start creating users if you need
    2) You can navigate to /app_dev.php/game/new and start using built in CRUD for "Game" Entity
        (note: we have 3 images that we can use in the teaser img attribute ('img/cs-teaser.png', 'img/lol-teaser.png', and 'img/dota-teaser.png')
  