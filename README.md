# Zend Skeleton

My first try to use zend php framework together with composer/mysql.

No need for a running webserver, as using 

```
php -S localhost:8080 
```

in the public directory. This is very handy.

To get it run towards a mysql database. Had to uncomment and change to following line in php.ini

```
extension=ext/php_pdo_mysql.dll
```

Uncomment the line and add ext/ did the trick

Entry point for me was:
http://framework.zend.com/manual/current/en/user-guide/modules.html

And for the basic setup
https://www.youtube.com/watch?t=225&v=fIPC2bJAIIo

To create a module structure, you could use the following command - if the module name is Album:

```
mkdir -pv Album/{config,src/Album/{Controller,Form,Model},view/album/album}
```
 