Cotizaciones de obra
===================

Requerimientos
---------------

* Apache 2.2 con mod rewrite activado
* PHP 5.4 en adelante
 * php5_intl : PHP Intl con ICU 4+
 * php5_curl
 * php5_mcrypt
 * php5_mysql
 * mas las dependencias que estos paquetes pudieran necesitar
* JSON Activado
* Ctype Activado
* MySQL 5.5
* [Composer][1]
* Recomendado: instalar extensiones ACL en el file system.

Instalación
-----------


composer install

sudo chmod 777 -R web/* app/cache/* app/logs/*
app/console cache:clear
app/console assets:install
app/console assetic:dump
sudo chmod 777 -R web/* app/cache/* app/logs/*

php app/console doctrine:database:create
php app/console doctrine:migrations:migrate
php app/console carga:inicial

sudo chmod -R 777 web/uploads/*




