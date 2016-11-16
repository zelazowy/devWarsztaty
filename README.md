# devWarsztaty: Podstawy Symfony

Witaj w repozytorium stworzonym na potrzeby warsztatów z podstaw frameworka Symfony.


Do prawidłowego działania aplikacji wymagany jest zainstalowany PHP w wersji PHP 5.5.9 (PHP 7 również da radę).

Bardzo wskazane jest również zainstalowanie [Gita](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) oraz 
[Composera](https://getcomposer.org/).

Na warsztatach będziemy używać IDE PhpStorm - naszym zdaniem najwygodniejszego narzędzia na rynku. Jest to program płatny
 ale posiadający [darmową wersję 30-dniową](https://www.jetbrains.com/phpstorm/download/), dlatego zalecamy zainstalowanie
 go - posiada świetne wtyczki do samego Symfony które naprawdę usprawniają pracę.

## Instalacja środowiska dla Ubuntu
Aby zainstalować minimalne wymagane środowisko na Ubuntu wykonaj następujące kroki:
  1. sprawdź, czy masz zainstalowane PHP: `$ php -v`. Wymagana jest wersja wyższa niż PHP 5.5.9 (7 też może być ;))
  2. jeśli nie masz zainstalowanego PHP, wykonaj: `$ sudo apt-get install php7.0 php7.0-xml`
  3. sprawdź, czy PHP zainstlował się poprawnie: `$ php -v`
  4. sprawdź, czy masz zainstalowanego Gita: `$ git --version`
  5. jeśli nie, wykonaj: `$ sudo apt-get install git`
  6. utwórz katalog dla projektu: `$ mkdir ~/Sites && cd ~/Sites`
  7. sklonuj repozytorium z githuba: `$ git clone git@github.com:zelazowy/devWarsztaty.git && cd devWarsztaty`
  8. zainstaluj composera:
  
  ```
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php -r "if (hash_file('SHA384', 'composer-setup.php') === 'aa96f26c2b67226a324c27919f1eb05f21c248b987e6195cad9690d5c1ff713d53020a02ac8c217dbf90a7eacc9d141d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  mv composer.phar bin/composer
  chmod a+x bin/composer
  ```
  
  9. sprawdź, czy composer działa poprawnie: `$ bin/composer --version ` 

## Instalacja środowiska dla OS X
Aby zainstalować minimalne środowisko na OS X wykonaj następujące kroki
  1. upewnij się, że masz zainstalowane PHP w wersji co najmniej 5.5.9 (7 też będzie ok): `$ php -v`
  2. jeśli nie, zainstaluj go (np [tak](https://coolestguidesontheplanet.com/upgrade-php-on-osx/), albo przez porty/brew)
  3. sprawdź, czy masz zainstalowanego Gita: `$ git --version`
  4. jeśli nie, zainstaluj go korzystając z portów/brew
  5. utwórz katalog dla projektu: `$ mkdir ~/Sites && cd ~/Sites`
  6. sklonuj repozytorium z githuba: `$ git clone git@github.com:zelazowy/devWarsztaty.git && cd devWarsztaty`
  7. zainstaluj composera:
  
  ```
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php -r "if (hash_file('SHA384', 'composer-setup.php') === 'aa96f26c2b67226a324c27919f1eb05f21c248b987e6195cad9690d5c1ff713d53020a02ac8c217dbf90a7eacc9d141d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  mv composer.phar bin/composer
  chmod a+x bin/composer
  ```
  
  8. sprawdź, czy composer działa poprawnie: `$ bin/composer --version ` 
  
## Instalacja środowiska dla Windowsa

## Pierwsze uruchomienie projektu 
Aby uruchomić aplikację po raz pierwszy wykonaj następujące kroki:
  1. `$ cd ~/Sites/devWarsztaty`
  2. `$ bin/composer install`
  3. pozostaw domyślne wartości parametrów proponowane przez composera
  4. `$ bin/console server:run`
  5. wejdź na wyświetlony przez konsolę adres (zazwyczaj http://127.0.0.1:8000)
  6. powinna ukazać się strona potwierdzająca prawidłowe uruchomienie Symfony
  
