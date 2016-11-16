# devWarsztaty: Podstawy Symfony

Witaj w repozytorium stworzonym na potrzeby warsztatów z podstaw frameworka Symfony.


Do prawidłowego działania aplikacji wymagany jest zainstalowany PHP w wersji PHP 5.5.9 (PHP 7 również da radę).

Bardzo wskazane jest również zainstalowanie [Gita](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) oraz 
[Composera](https://getcomposer.org/).

Na warsztatach będziemy używać IDE PhpStorm - naszym zdaniem najwygodniejszego narzędzia na rynku. Jest to program płatny
 ale posiadający [darmową wersję 30-dniową](https://www.jetbrains.com/phpstorm/download/), dlatego zalecamy zainstalowanie
 go - posiada świetne wtyczki do samego Symfony które naprawdę usprawniają pracę.

## Instalacja środowiska dla Ubuntu
Instrukcja dostępna tu [instalacja Ubuntu](docs/installation_ubuntu.md)

## Instalacja środowiska dla OS X
Instrukcja dostępna tu [instalacja OS X](docs/installation_osx.md)
  
## Instalacja środowiska dla Windowsa

## Pierwsze uruchomienie projektu 
Aby uruchomić aplikację po raz pierwszy wykonaj następujące kroki:
  1. `$ cd ~/Sites/devWarsztaty`
  2. `$ bin/composer install`
  3. pozostaw domyślne wartości parametrów proponowane przez composera
  4. `$ bin/console server:run`
  5. wejdź na wyświetlony przez konsolę adres (zazwyczaj http://127.0.0.1:8000)
  6. powinna ukazać się strona potwierdzająca prawidłowe uruchomienie Symfony
  
