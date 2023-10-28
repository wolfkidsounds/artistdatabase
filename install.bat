@echo off
setlocal enabledelayedexpansion

:check_changes
call git status | findstr /C:"composer.lock" /C:"composer.json" /C:"symfony.lock" /C:"package-lock.json" /C:"package.json" >nul

if %errorlevel%==0 (
    echo ======================================================
    echo Es wurden Änderungen in Composer-, Symfony- oder NPM-Dateien gefunden.
    echo Bitte bestätige diese Änderungen, damit du fortfahren kannst.
    echo ======================================================
    pause
    exit /b
) else (
    echo ======================================================
    echo Es gibt keine aktuellen Änderungen in Composer-, Symfony- oder NPM-Dateien.
    echo Das Skript wird weiter ausgeführt.
    echo ======================================================
)

echo ======================================================
echo Änderungen aus dem GitHub-Repository abrufen.
echo ======================================================
call git pull

echo ======================================================
echo Speichern von aktuellen Änderungen
echo ======================================================
call git stash save "Aktuelle Änderungen speichern"

echo ======================================================
echo Installieren von Composer-Abhängigkeiten
echo ======================================================
call composer install

echo ======================================================
echo Installieren von Node.js-Abhängigkeiten
echo ======================================================
call npm install

echo ======================================================
echo Installieren von Updates
echo ======================================================
call composer update
call npm update

echo ======================================================
echo Hinzufügen, Übertragen und Veröffentlichen von Änderungen auf GitHub
echo ======================================================
call git add .
call git commit -m "Update dependencies"
call git push

echo ======================================================
echo Gespeicherte Änderungen wiederherstellen.
echo ======================================================
call git stash pop