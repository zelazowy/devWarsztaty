[powrót](../README.md)

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