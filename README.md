ML
========================

We can use this document to easily communicate needs for setting up dev environments and 'gotchas'

1) Installing
----------------------------------
Create a new folder, empty that you will house the project in.  Then run the following commands:

```
$ git clone https://github.com/teampl4y4/ml.git ./
$ composer update
```

That will grab the current code repository and the second command will update all the dependencies (such as Syfmony, Doctrine, etc.)

Next you will want to change permissions to the cache and log folder:

```
$ chmod -R 777 app/cache
$ chmod -R 777 app/logs
```

Finally you will need to update the app/config/parameters.yml file.  We ignore this on GIT because each environment will have it's own,
so copy the distribution that is in GIT at app/config/parameters.yml.dist and change the values inside of it for your development environment.

Note: If you are running MAMP, and have issues getting composer or setting up ICU please read this article:
    1) http://www.lullabot.com/blog/article/installing-php-pear-and-pecl-extensions-mamp-mac-os-x-107-lion


2) Setting Up Database
----------------------------------
    Please be sure that you copied the app/config/parameters.yml.dist file to app/config/parameters.yml and updated the values for your local database environment.
    When this is done, you will need to run the following commands to create both the database and the schema:

    ```
    1) $ php app/console doctrine:database:create
    2) $ php app/console doctrine:schema:update --force
    ```

3) Setting Up Data
----------------------------------
    1) You can navigate with your browser to /app_dev.php and click register to start creating users if you need
    2) You can navigate with your browser to /app_dev.php/game/new and start using built in CRUD for "Game" Entity
        (note: we have 3 images that we can use in the teaser img attribute ('img/cs-teaser.png', 'img/lol-teaser.png', and 'img/dota-teaser.png')
  