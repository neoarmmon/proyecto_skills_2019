//Tablas E/R
Genero(Nombre, Descripcion)
Roles_Usuario(Nombre, Descripcion)
Juegos(Titulo, -Generos, Descripcion, Votos Positivos, Votos Negativos)
Usuario (Usuario, Contraseña, -Rol)