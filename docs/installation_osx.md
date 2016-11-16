[powrót](../README.md)

## Instalacja środowiska dla Os X
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