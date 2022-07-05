CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    complete_name varchar(50),
    password varchar(255)
);

CREATE TABLE publicacion(
    autor varchar(50),
    fecha_hora datetime,
    cuerpo varchar(255),
    primary key (autor, fecha_hora),
    foreign key (autor) references usuario(username)
);