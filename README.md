How to use

1. Download "composer" -> https://getcomposer.org/download/ -> Composer-Setup.exe
2. Download "Node.js" -> https://nodejs.org/
3. Download "Docker" -> https://docs.docker.com/get-docker/
4. Download "Symfony CLI" -> https://symfony.com/download (Download Binaries)
5. Add "Symfony CLI" to your PATH Environment -> https://gist.github.com/nex3/c395b2f8fd4b02068be37c961301caa7
6. Open CMD and run "wsl --update" (this updates the windows subsystem for linux)
7. Clone Repository
8. run "composer install" (installs all composer dependencies)
9. run "npm install" (installs all npm dependencies)
10. run "npm run watch" (runs the watcher to compile css and javascript)
11. run "symfony serve -d" (starts the server)
12. run "docker-compose up -d" (starts the docker container and serves the database)