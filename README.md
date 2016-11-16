# devWarsztaty: Podstawy Symfony

Witaj w repozytorium stworzonym na potrzeby warsztatów z podstaw frameworka Symfony.


Do prawidłowego działania aplikacji wymagany jest zainstalowany PHP w wersji 5.6 (PHP 7 również da radę).

Bardzo wskazane jest również zainstalowanie [Gita](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) oraz 
[Composera](https://getcomposer.org/).

Na warsztatach będziemy używać IDE PhpStorm - naszym zdaniem najwygodniejszego narzędzia na rynku. Jest to program płatny
 ale posiadający [darmową wersję 30-dniową](https://www.jetbrains.com/phpstorm/download/), dlatego zalecamy zainstalowanie
 go - posiada świetne wtyczki do samego Symfony które naprawdę usprawniają pracę.

## Instalacja środowiska dla Ubuntu
Aby zainstalować minimalne wymagane środowisko na Ubuntu wykonaj następujące kroki:
  1. sprawdź, czy masz zainstalowane PHP: `$ php -v`. Wymagana jest wersja wyższa niż 5.6 (7 też może być ;))
  2. jeśli nie masz zainstalowanego PHP, wykonaj: `$ sudo apt-get install php7.0 php7.0-xml`
  3. sprawdź, czy PHP zainstlował się poprawnie: `$ php -v`
  4. sprawdź, czy masz zainstalowanego Gita: `$ git --version`
  5. jeśli nie, wykonaj: `$ sudo apt-get install git`
  6. zainstaluj composera:
  
  ```
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php -r "if (hash_file('SHA384', 'composer-setup.php') === 'aa96f26c2b67226a324c27919f1eb05f21c248b987e6195cad9690d5c1ff713d53020a02ac8c217dbf90a7eacc9d141d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  sudo mkdir -p /usr/local/bin
  sudo mv composer.phar /usr/local/bin/composer
  sudo chmod a+x /usr/local/bin/composer
  ```
  
  7. sprawdź, czy composer działa poprawnie: `$ composer --version ` 
  8. zasinstaluj instalator symfony: 
  
  ```
  sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony`
  sudo chmod a+x /usr/local/bin/symfony
  ```
  
  9. sprawdź, czy composer działa poprawnie: `$ symfony --version`


Aby zainstalować warsztatową aplikację wykonaj następujące kroki:

  1. `git clone`
  2. `composer install`
  3. `bin/console server:run`
