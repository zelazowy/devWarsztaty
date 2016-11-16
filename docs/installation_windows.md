[powrót](../README.md)

## Instalacja środowiska dla Windowsa
Aby zainstalować minimalne środowisko na Windowsie wykonaj następujące kroki:
  1. jeśli masz XAMPPa lub inny serwer zawierający w sobie PHP w wersji co najmniej 5.5.9 (7 też będzie ok) to przejdź do kroku 3
  2. zainstaluj XAMPPa, może być [wersja portable](http://portableapps.com/apps/development/xampp)
  3. wejdź do panelu sterowania XAMPPem i kliknij `shell` aby uruchomić konsolę
  4. sprawdź, czy masz wymagaą wersję PHP: `php -v`
  5. zainstaluj Gita, również może być [wersja portable](https://github.com/git-for-windows/git/releases/download/v2.10.2.windows.1/PortableGit-2.10.2-64-bit.7z.exe)
  6. sprawdź, czy Git działa poprawnie: wejdź do katalogu w którym go zainstalowałeś, uruchom plik `git-cmd.exe` i wykonaj w konsoli `git --version`
  8. stwórz katalog na potrzeby warsztatu w lokalizacji `C:\Sites`
  9. sklonuj repozytorium projektu z Githuba korzystając z konsoli `git-cmd.exe`: `cd C:\Sites && git clone https://github.com/zelazowy/devWarsztaty.git`
  10. zainstaluj composera korzystając z [instalatora](https://getcomposer.org/Composer-Setup.exe)
  11. podczas instalacji wskaż lokalizację pliku `php.exe` w katalogu instalacji XAMPPa\php\php.exe
  12. zamknij konsolę gita `git-cmd.exe` i otwórz ją ponownie (inaczej composer nie zostanie znaleziony)
  13. wykonaj: `cd C:\Sites\devWarsztaty && composer install`