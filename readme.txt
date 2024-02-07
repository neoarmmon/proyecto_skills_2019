//Tablas E/R
Genero(Nombre, Descripcion)
Roles_Usuario(Nombre, Descripcion)
Juegos(Nombre, -Generos, Descripcion, Votos Positivos, Votos Negativos, Imagen)
Usuario (Nombre, Contraseña, -Rol)

###> symfony/framework-bundle ###
/.env.local
/.env.local.php
/.env.*.local
/config/secrets/prod/prod.decrypt.private.php
/public/bundles/
/var/
/vendor/
###< symfony/framework-bundle ###

###> phpunit/phpunit ###
/phpunit.xml
.phpunit.result.cache
###< phpunit/phpunit ###

###> symfony/phpunit-bridge ###
.phpunit.result.cache
/phpunit.xml
###< symfony/phpunit-bridge ###

###> symfony/asset-mapper ###
/public/assets/
/assets/vendor/
###< symfony/asset-mapper ###
