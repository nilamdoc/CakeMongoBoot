CakePHP + Mongo + Bootstrap from Twitter with 2 data tables
====

This is a comprehensive CakePHP with built in MongoDB and Twitter Bootstrap.


It contains
- CakePHP 2.2.2
- MongoDB setup installed
- Twitter Bootstrap installed
- RockMongo installed
- Two data tables installed


MongoDB Installtion
====
Download MongoDB from http://www.mongodb.org/downloads

Download PHP Driver for MongoDB from [PHPDriversMongoDB](http://us.php.net/manual/en/mongo.installation.php)

Installing MongoDB as a service in Windows
====
[MongoDB as a Service](http://docs.mongodb.org/manual/tutorial/install-mongodb-on-windows/#mongodb-as-a-windows-service)

Installing CakeMongoBoot on your webserver
====
Download this application from github and unzip this application on your web server.

Example for Windows + XAMPP installation
-
- Edit c:\Windows\System32\Drivers\etc\hosts

Add the following line

    127.0.0.1 CakeMongoBoot

- Edit c:\xampp\apache\conf\extra\httpd-vhosts.conf

Add the following code

    <VirtualHost CakeMongoBoot:80>
      DocumentRoot F:\Apache\www\TBG\CakeMongoBoot
      ServerName CakeMongoBoot
      ServerAdmin admin@CakeMongoBoot
        <Directory "F:\Apache\www\TBG\CakeMongoBoot">
           Options Indexes FollowSymLinks
           AllowOverride FileInfo
           Order allow,deny
           Allow from all
        </Directory>
    </VirtualHost>

Restart XAMPP Apache or restart computer

Adding / Modifying Database to CakeMongoBoot
-
In your browser go to
http://CakeMongoBoot/rockmongo

    username: admin
    password: admin

Under CakeMongoBoot you will see 3 collections
    roles
    users
    system.indexes

How to add a new data collection and bake with cake
-
Insert a new Collection (follow the CakePHP convention of plural names)
e.g. rights, profiles, blogs, posts

