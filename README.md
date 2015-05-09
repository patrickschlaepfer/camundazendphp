# Zend Skeleton with Camunda REST connection

My first try to use zend php framework together with composer/mysql. Then extend it by
adding Camunda PHP SDK.

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

## Install Camunda

I'm using Camunda 7.3.0-Alpha3 wildfly.zip . Just download it from camunda.org.

As you might guess, per default, Camunda tries also to run on port 8080, but there's already
php. So to change the port just add the offset, either to standalone.conf.bat or standalone.conf (Linux)

```
rem # JVM memory allocation pool parameters - modify as appropriate.
set "JAVA_OPTS=-Xms512m -Xmx768m -XX:MaxPermSize=384m -Djboss.socket.binding.port-offset=100"
```

And Camunda will listens on port 8180.