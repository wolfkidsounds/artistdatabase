@echo off
setlocal enabledelayedexpansion

:check_changes
call git status | findstr /C:"composer.lock" /C:"composer.json" /C:"symfony.lock" /C:"package-lock.json" /C:"package.json" >nul

if %errorlevel%==0 (
    echo ======================================================
    echo Es wurden Aenderungen in Composer-, Symfony- oder NPM-Dateien gefunden.
    echo Bitte bestätige diese Änderungen, damit du fortfahren kannst.
    echo ======================================================
    pause
    exit /b
) else (
    echo ======================================================
    echo Es gibt keine aktuellen Aenderungen in Composer-, Symfony- oder NPM-Dateien.
    echo Das Skript wird weiter ausgeführt.
    echo ======================================================
)

echo ======================================================
echo Aenderungen aus dem GitHub-Repository abrufen.
echo ======================================================
call git pull

echo ======================================================
echo Speichern von aktuellen Aenderungen
echo ======================================================
call git stash save "Aktuelle Änderungen speichern"

echo ======================================================
echo Installieren von Composer-Abhaengigkeiten
echo ======================================================
call composer install

echo ======================================================
echo Installieren von Node.js-Abhaengigkeiten
echo ======================================================
call npm install

echo ======================================================
echo Installieren von Updates
echo ======================================================
call composer update
call npm update

echo ======================================================
echo Hinzufuegen, Uebertragen und Veroeffentlichen von Aenderungen auf GitHub
echo ======================================================
call git add .
call git commit -m "Update dependencies"
call git push

echo ======================================================
echo Gespeicherte Aenderungen wiederherstellen.
echo ======================================================
call git stash pop