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

Next you will want to change permissions to the cache and log folder, instead of simply giving a 777 we want to change the owners/users so that it always have the right access so lets run the following commands:

```
$ sudo rm -rf app/cache/*
$ sudo rm -rf app/logs/*
$ APACHEUSER=`ps aux | grep -E '[a]pache|[h]ttpd' | grep -v root | head -1 | cut -d\  -f1`
$ sudo chmod +a "$APACHEUSER allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
$ sudo chmod +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
```

Now we need to set up a symlink to our asset folders, you can do this by running the following command:

```
$ php app/console assets:install --symlink
```

Finally you will need to update the app/config/parameters.yml file.  We ignore this on GIT because each environment will have it's own,
so copy the distribution that is in GIT at app/config/parameters.yml.dist and change the values inside of it for your development environment.

Note: If you are running MAMP, and have issues getting composer or setting up ICU please read this article:
[Read This Article/Blog](http://www.lullabot.com/blog/article/installing-php-pear-and-pecl-extensions-mamp-mac-os-x-107-lion)


2) Setting Up Database
----------------------------------
Please be sure that you copied the app/config/parameters.yml.dist file to app/config/parameters.yml and updated the values for your local database environment.  When this is done, you will need to run the following commands to create both the database and the schema:

```
$ php app/console doctrine:database:create
$ php app/console doctrine:schema:update --force
```

3) Setting Up Data
----------------------------------
Fixtures are enabled and on the Fantasy bundle so run the following command to load the development / dummy data

```
$ php app/console doctrine:fixtures:load
```

- You can navigate with your browser to /app_dev.php and click register to start creating users if you need
- You can navigate with your browser to /app_dev.php/game/new and start using built in CRUD for "Game" Entity
